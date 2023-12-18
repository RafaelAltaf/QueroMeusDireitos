<?php 
    include_once("fabricaConexao.php");
    class Usuarios{
        private $id;
        private $nome;
        private $email;
        private $senha;

        public function GetId(){
            return $this->id;
        }

        public function SetId($id){
            $this->id = $id;
        }

        public function GetNome(){
            return $this->nome;
        }

        public function SetNome($nome){
            $this->nome = $nome;
        }

        public function GetEmail(){
            return $this->email;
        }

        public function SetEmail($email){
            $this->email = $email;
        }

        public function GetSenha(){
            return $this->senha;
        }

        public function SetSenha($senha){
            $this->senha = $senha;
        }

        public function Cadastrar(){
            $bd = new FabricaConexao();
            if($this->_checarEmail($bd)){
                $bd->Conectar();
                $sql = $bd->conn->prepare( 'INSERT INTO Usuarios(nome, email, senha) VALUES("?","?","?")');
                try{
                    $sql->execute(["$this->nome", "$this->email", "$this->senha"]);
                    $bd->conn = NULL;
                    echo "Deu bão";
                    return true;
                }
                catch(PDOException $err){
                    echo("Deu ruim ".$err->getMessage());
                    return false;
                }
            }
            else{
                echo "Email já cadastrado!";
            }
            
        }

        public function _checarEmail($bd){
            $bd->Conectar();
            $sql = $bd->conn->prepare('CALL Checar_Email("?")');
            try{
                if($sql->execute($this->email))
                $bd->conn = NULL;
                return true;
            }
            catch(PDOException $err){
                echo("Deu ruim ".$err->getMessage());
                $bd->conn = NULL;
                return false;
            }
        }
    }
?>