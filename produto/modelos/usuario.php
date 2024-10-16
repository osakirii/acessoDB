<?php
include_once 'conexao.php';

class Usuario {
        private $user;
        private $senha;
        private $conn;

	public function getUser()
	{
		return $this->user;	
	}
	public function getSenha()
	{
		return $this->senha;	
	}


	public function setUser($user)
	{
		$this->user = $user;
		return $this;	
	}
	public function setSenha($senha)
	{
		$this->senha = $senha;
		return $this;	
	}

    function logar(){
        try{
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("SELECT * FROM usuario WHERE login LIKE ? and senha = ?");
            $sql->bindValue(1, $this->getUser(), PDO::PARAM_STR);
            $sql->bindValue(2, $this->getSenha(), PDO::PARAM_STR);

            $sql->execute();
            return $sql->fetchAll();

            $this->conn = null;
        } catch(PDOException $exc){
            echo "<span>Erro ao executar consulta.</span>" . $exc->getMessage();
        }
    }   
}