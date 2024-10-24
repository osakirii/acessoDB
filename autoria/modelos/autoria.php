<?php

    include_once "conexao.php";

    class Autoria{

    //variáveis utilizadas
        private $cod_livro;
        private $cod_autor;
        private $dataLancamento;
        private $editora;

        private $conn;

        
	public function getCod_livro()
	{
		return $this->cod_livro;	
	}
	public function getCod_autor()
	{
		return $this->cod_autor;	
	}
	public function getDataLancamento()
	{
		return $this->dataLancamento;	
	}
	public function getEditora()
	{
		return $this->editora;	
	}

    

	public function setCod_livro($cod_livro)
	{
		$this->cod_livro = $cod_livro;
		return $this;	
	}
	public function setCod_autor($cod_autor)
	{
		$this->cod_autor = $cod_autor;
		return $this;	
	}
	public function setDataLancamento($dataLancamento)
	{
		$this->dataLancamento = $dataLancamento;
		return $this;	
	}
	public function setEditora($editora)
	{
		$this->editora = $editora;
		return $this;	
	}

    function listar(){
        try{
            $this->conn = new Conectar();
            $sql = $this->conn->query("SELECT * from autoria order by cod_Livro");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        } catch (PDOException $exc){
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }

	function exclusao(){
		try{
			$this->conn = new Conectar();
			$sql =  $this->conn->prepare("DELETE from autoria WHERE cod_livro = ? and cod_autor = ?");
			@$sql->bindParam(1, $this->getCod_livro(), PDO::PARAM_STR);
			@$sql->bindParam(2, $this->getCod_autor(), PDO::PARAM_STR);
			if($sql->execute() == 1){
				return "Excluído com sucesso!";
			} else {
				return "Erro na exclusão!";
			}
			$this->conn = null;

		} catch (PDOException $exc){
			echo "Erro ao excluir. " . $exc->getMessage();
		}

	}
}
?>