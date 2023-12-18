<?php
    DEFINE("SERVIDOR","MYSQL:HOST=LOCALHOST;dbname=biblioteca;charset=utf8");
    DEFINE("USUARIO","teste_rafaelAltaf");
    DEFINE("SENHA","");
    class FabricaConexao{
        public $conn;

        public function Conectar(){
            try{
                if(!isset($this->conn)){
                    $this->conn = new PDO(SERVIDOR, USUARIO, SENHA);
                    echo("Conexao realizada com sucesso!");
                }
            }
            catch(PDOException $err){
                echo("Erro: ".$err->getMessage());
            }
        }
    }
?>