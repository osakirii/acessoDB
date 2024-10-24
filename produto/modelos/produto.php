<?php

    include_once "conexao.php";

    class Produto{

    //variáveis utilizadas
        private $id;
        private $nome;
        private $estoque;

        private $conn;

        //getters
        public function getId()
        {
            return $this->id;	
        }
        public function getNome()
        {
            return $this->nome;	
        }
        public function getEstoque()
        {
            return $this->estoque;	
        }

        //setters
        public function setId($iId)
        {
            $this->id = $iId;
            return $this;	
        }
        public function setNome($iNome)
        {
            $this->nome = $iNome;
            return $this;	
        }
        public function setEstoque($iEstoque)
        {
            $this->estoque = $iEstoque;
            return $this;	
        }

        function listar(){
            try{
                $this->conn = new Conectar();
                $sql = $this->conn->query("SELECT * from produto order by nome");
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
                $sql =  $this->conn->prepare("DELETE from produto WHERE id = ?");
                @$sql->bindParam(1, $this->getId(), PDO::PARAM_STR);
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