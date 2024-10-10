<?php

    include_once "conexao.php";

    class Autor{

    //variáveis utilizadas
        private $cod_autor;
        private $nomeAutor;
        private $sobrenome;
        private $email;
        private $nasc;

        private $conn;


	public function getCod_autor()
	{
		return $this->cod_autor;	
	}
	public function getNomeAutor()
	{
		return $this->nomeAutor;	
	}
	public function getSobrenome()
	{
		return $this->sobrenome;	
	}
	public function getEmail()
	{
		return $this->email;	
	}
	public function getNasc()
	{
		return $this->nasc;	
	}
    

	public function setCod_autor($cod_autor)
	{
		$this->cod_autor = $cod_autor;
		return $this;	
	}
    
	public function setSobrenome($sobrenome)
	{
		$this->sobrenome = $sobrenome;
		return $this;	
	}
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;	
	}
	public function setNasc($nasc)
	{
		$this->nasc = $nasc;
		return $this;	
	}
	public function setNomeAutor($nomeAutor)
	{
		$this->nomeAutor = $nomeAutor;
		return $this;	
	}

    function listar(){
        try{
            $this->conn = new Conectar();
            $sql = $this->conn->query("SELECT * from autor order by nomeAutor");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        } catch (PDOException $exc){
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
}
?>