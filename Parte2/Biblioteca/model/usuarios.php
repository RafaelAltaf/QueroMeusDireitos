<?php 
    include_once("fabricaConexao.php");
    class Usuarios{
        private $id;
        private $nome;
        private $email;
        private $senha;

        //Get & Set
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

        //Funcionalidades
        public function Cadastrar(){
            if(!empty($this->email) && !empty($this->nome) && !empty($this->senha)){      
                $bd = new FabricaConexao();          
                if(!$this->_checarEmail($bd)){
                    $bd->Conectar();
                    $sql = "INSERT INTO Usuarios(nome, email, senha) VALUES(?,?,?)";
                    $result = $bd->conn->prepare($sql);
            
                    try{
                        $result->bind_param("sss",$this->nome,$this->email, $this->senha);
                        if($result->execute()){
                            $bd->conn->close();
                            echo "Deu bão";
                            return true;
                        }
                        else{
                            echo "Deu ruim";
                            return false;
                        }
                    }
                    catch(mysqli_sql_exception $err){
                        echo("Deu ruim ".$err->getMessage());
                        return false;
                    }
                }
                else{
                    echo "Email já cadastrado!";
                    return false;
                } 
            }
            else{
                return false;
            }
        }

        public function _checarEmail($bd){
            $bd->Conectar();
            $sql = "SELECT email FROM usuarios WHERE email = ?;";    
            try{
                $result = $bd->conn->prepare($sql);
                $result->bind_param("s",$this->email);
                if($result->execute()){
                    $result->store_result();
                    if($result->num_rows > 0){
                        $bd->conn->close();
                        return true;
                    }
                    else{
                        return false;
                    }
                }
                else{
                    return false;
                }
            }
            catch(mysqli_sql_exception $err){
                echo("Deu ruim ".$err->getMessage());
                $bd->conn->close();
                return false;
            }
        }

        public function Logar(){
            $bd = new FabricaConexao();
            $bd->Conectar();
            $sql = "SELECT email, senha FROM usuarios WHERE email = ? AND senha = ?;";
            try{
                $result = $bd->conn->prepare($sql);
                $result->bind_param("ss",$this->email, $this->senha);
                $result->execute();
                if($result->execute()){
                    $result->store_result();
                    if($result->num_rows > 0){
                        $bd->conn->close();
                        return true;
                    }
                }
                else{
                    return false;
                }
            }
            catch(mysqli_sql_exception $err){
                echo("Deu ruim ".$err->getMessage());
                $bd->conn->close();
                return false;
            }
        }
    }
?>