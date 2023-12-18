<?php 
include_once("fabricaConexao.php");
class Livros{
    private $id;
    private $titulo;
    private $autor;
    private $dataPublicacao;

    //Get & Set
    public function GetId(){
        return $this->id;
    }

    public function SetId($param_id){
        $this->id = $param_id;
    }

    public function GetTitulo(){
        return $this->titulo;
    }

    public function SetTitulo($param_titulo){
        $this->titulo = $param_titulo;
    }

    public function GetAutor(){
        return $this->autor;
    }

    public function SetAutor($param_autor){
        $this->autor = $param_autor;
    }

    public function GetDataPublicacao(){
        return $this->dataPublicacao;
    }

    public function SetDataPublicacao($param_data){
        $this->dataPublicacao = new DateTime($param_data);
        $this->dataPublicacao = date_format($this->dataPublicacao, 'Y-m-d H:i:s');
    }

    //Funcionalidades

    public function CadastrarLivro(){
        if(!empty($this->titulo) && !empty($this->dataPublicacao) && !empty($this->autor)){     
            $bd = new FabricaConexao();   
            if(!$this->_checarLivro($bd)){        
                $bd->Conectar();
                $sql = "INSERT INTO Livros(titulo, autor, data_publicacao) values(?,?,?);";
                $result = $bd->conn->prepare($sql);
        
                try{
                    $result->bind_param("sss",$this->titulo, $this->autor, $this->dataPublicacao);
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
                echo "Livro já cadastrado!";
                return false;
            } 
        }
        else{
            echo "Preencha todos os campos!";
            return false;
        }
    }

    public function _checarLivro($bd){
        $bd->Conectar();
        $sql = "SELECT titulo FROM livros WHERE titulo = ? AND autor = ?;";    
        try{
            $result = $bd->conn->prepare($sql);
            $result->bind_param("ss",$this->titulo, $this->autor);

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
}
?>