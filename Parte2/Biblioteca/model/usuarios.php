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
                $checarEmail = $this->_checarEmail();       
                if(!$checarEmail){
                    $bd->Conectar();
                    $sql = "INSERT INTO Usuarios(nome, email, senha) VALUES(?,?,?)";
                    $result = $bd->conn->prepare($sql);
            
                    try{
                        $result->bind_param("sss",$this->nome,$this->email, $this->senha);
                        if($result->execute()){
                            $bd->conn->close();
                            $login = $this->Logar(); //Após o cadastro, é iniciada uma sessão do usuário, que, então, pode utilizar o sistema logo após o cadastro.
                            if(!$login){
                                return false;
                            } 
                            else{
                                return "$login"; //Caso ocorra uma falha na execução no método Logar(), ele retorna uma mensagem de erro.
                            }
                            
                        }
                        else{
                            return "Ocorreu um problema na execução da consulta";
                        }
                    }
                    catch(mysqli_sql_exception $err){
                        return "Ocorreu um erro: ".$err->getMessage();
                    }
                }
                else{
                    return $checarEmail;
                } 
            }
            else{
                return "Preencha todos os campos!";
            }
        }

        public function _checarEmail(){
            //Verifica se o email informado já está cadastrado no Banco de Dados.
            $bd = new FabricaConexao();
            $bd->Conectar();
            $sql = "SELECT email FROM usuarios WHERE email = ?;";    
            try{
                $result = $bd->conn->prepare($sql);
                $result->bind_param("s",$this->email);
                if($result->execute()){
                    $result->store_result();
                    if($result->num_rows > 0){
                        $bd->conn->close();
                        return "Email já cadastrado!";
                    }
                    else{
                        $bd->conn->close();
                        return false; 
                    }
                }
                else{
                    $bd->conn->close();
                    return "Ocorreu um problema na execução da consulta";
                }
            }
            catch(mysqli_sql_exception $err){
                $bd->conn->close();
                return "Ocorreu um erro: " . $err->getMessage();
            }
        }

        public function Logar(){
            //Verifica se o usuário informado já está cadastrado e, caso isso seja verdadeiro, inicia uma sessão.
            $bd = new FabricaConexao();
            if($this->_checarEmail() == "Email já cadastrado!"){
                $bd->Conectar();
                $sql = "SELECT id_usuario FROM usuarios WHERE email = ? AND senha = ?;";
                try{
                    $result = $bd->conn->prepare($sql);
                    $result->bind_param("ss",$this->email, $this->senha);
    
                    if($result->execute()){
                        $result->store_result();
                        if($result->num_rows > 0){
                            $result->bind_result($id);
                            $result->fetch();
                            session_start();
                            $_SESSION['id_usuario'] = $id;
                            $bd->conn->close();
                            return false;
                        }
                        else{
                            $bd->conn->close();
                            return "Senha incorreta!";
                        }
                    }
                    else{
                        $bd->conn->close();
                        return "Houve um problema na execução da consulta";
                    }
                }
                catch(mysqli_sql_exception $err){
                    $bd->conn->close();
                    return "Ocorreu um problema:" . $err->getMessage();
                }
            }
            else{
                return "O email informado não está cadastrado!";
            }

        }
    }
?>