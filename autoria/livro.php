<?php

    include_once "conexao.php";

    class Livro{

    //variáveis utilizadas
        private $cod_livro;
        private $titulo;
        private $categoria;
        private $isbn;
        private $idioma;
        private $qtdePag;

        private $conn;


	public function getCod_livro()
	{
		return $this->cod_livro;	
	}
	public function getTitulo()
	{
		return $this->titulo;	
	}
	public function getCategoria()
	{
		return $this->categoria;	
	}
	public function getIsbn()
	{
		return $this->isbn;	
	}
	public function getIdioma()
	{
		return $this->idioma;	
	}
    public function getQtdePag()
	{
		return $this->qtdePag;	
	}
    
    

	public function setCod_livro($cod_livro)
	{
		$this->cod_livro = $cod_livro;
		return $this;	
	}
    
	public function setCategoria($categoria)
	{
		$this->categoria = $categoria;
		return $this;	
	}
	public function setIsbn($isbn)
	{
		$this->isbn = $isbn;
		return $this;	
	}
	public function setIdioma($idioma)
	{
		$this->idioma = $idioma;
		return $this;	
	}
	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
		return $this;	
	}
    public function setQtdePag($qtdePag)
	{
		$this->qtdePag = $qtdePag;
		return $this;	
	}



    function listar(){
        try{
            $this->conn = new Conectar();
            $sql = $this->conn->query("SELECT * from livro order by titulo");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        } catch (PDOException $exc){
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
}
?>