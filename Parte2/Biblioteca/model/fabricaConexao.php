<?php
    DEFINE("SERVIDOR","MYSQL:HOST=LOCALHOST;dbname=biblioteca;charset=utf8");
    DEFINE("USUARIO","teste_rafaelAltaf");
    DEFINE("SENHA","");
    class FabricaConexao{
        public $conn;

        public function Conectar(){
            $servidor = "localhost";
            $usuario = "teste_rafaelAltaf";
            $senhaBd = "";
            $nomeBd = "biblioteca";
            try{
                if(!isset($this->conn)){
                    $this->conn = new mysqli($servidor, $usuario, $senhaBd, $nomeBd);
                }
            }
            catch(mysqli_sql_exception $err){
                echo("Erro: ".$err->getMessage());
            }
        }
    }
?>