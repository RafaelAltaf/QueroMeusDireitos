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

    public function DeletarLivro(){
        $bd = new FabricaConexao(); 
        $bd->Conectar();
        $sql = "";    
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

    public function ListarLivros($lista=false, $id_usuario=false){
        if($lista){
            $sql = "SELECT * FROM livros INNER JOIN $lista WHERE id_usuario = $id_usuario";
            $msg = "Você ainda não adicionou nenhum livro nesta lista!";
        }
        else{
            $sql = "SELECT * FROM livros";
            $msg = "Não há nenhum livro cadastrado!";
        }
        $bd = new FabricaConexao();
        $bd->Conectar();

        
        $result = $bd->conn->prepare($sql);
        $result->execute();
        $result->store_result();

        if ($result->num_rows > 0)
        {            
            $result->bind_result($id,$titulo,$autor,$data);
            $num = 1;

            echo
            '<table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Número</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Data de Publicação</th>
                </tr>
            </thead>
            <tbody class = "table-group-divider">';

            while ($result->fetch()) {
                echo "<tr>";
                echo "<td>" . $num."</td>"; 
                echo "<td>" . $titulo."</td>";
                echo "<td>" . $autor."</td>";
                echo "<td>" . $data."</td>";
                echo "<td> <a class='btn btn-sm btn-primary' href='../controller/acaoLivro.php?acao=QuerLer&id_livro=".$id."'>Quero ler</a>";
                echo "<td> <a class='btn btn-sm btn-primary' href='../controller/acaoLivro.php?acao=QuerLer&id_livro=".$id."'>Estou lendo</a>";
                echo "<td> <a class='btn btn-sm btn-primary' href='../controller/acaoLivro.php?acao=QuerLer&id_livro=".$id."'>Já lí</a>";
                echo "<td> <a class='btn btn-sm btn-danger' href='../controller/acaoLivro.php?acao=deletar&id_livro=".$id."'>Deletar</a>";
                echo "</tr>";
                $num++;
            }
            echo"</tbody></table></body>";
        }
        else{
            echo($msg);
        }
      } 
}
?>