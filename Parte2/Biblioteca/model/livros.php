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
        //Cadastra um livro no Banco de Dados.
        if(!empty($this->titulo) && !empty($this->dataPublicacao) && !empty($this->autor)){        
            $checaLivro = $this->_checarLivro();
            if(!$checaLivro){ //Verificando se o livro já foi cadastrado
                $bd = new FabricaConexao();
                $bd->Conectar();
                $sql = "INSERT INTO Livros(titulo, autor, data_publicacao) values(?,?,?);";
                $result = $bd->conn->prepare($sql);
        
                try{
                    $result->bind_param("sss",$this->titulo, $this->autor, $this->dataPublicacao);
                    if($result->execute()){
                        $bd->conn->close();
                        return false;
                    }
                    else{
                        $bd->conn->close();
                        return "Ocorreu um erro na execução da consulta!";
                    }
                }
                catch(mysqli_sql_exception $err){
                    $bd->conn->close();
                    return "Ocorreu um erro: ".$err->getMessage();
                }
            }
            else{
                return $checaLivro;
            } 
        }
        else{
            return "Preencha todos os campos!";
        }
    }

    public function AdicionarLivro($lista, $id_usuario){
        //Adiciona um livro já existente no Banco de Dados a uma lista específica.
        $checaLivro = $this->_checarLivro($lista);
        if(!$checaLivro){ //Verificando se o livro já está presente na lista.
            $bd = new FabricaConexao();
            $bd->Conectar();
            $sql = "INSERT INTO $lista(id_livro,id_usuario) values(?,?)";
            try{
                $result = $bd->conn->prepare($sql);
                $result->bind_param("ii",$this->id, $id_usuario);
                if($result->execute()){
                    return false; 
                }
                else{
                    return "Ocorreu um erro na execução da consulta";
                }
            }
            catch(mysqli_sql_exception $err){
                echo("Deu ruim ".$err->getMessage());
                $bd->conn->close();
                return "Ocorreu um erro: ".$err->getMessage();
            }
        }
        else{
            return $checaLivro;
        }
    }

    public function _checarLivro($lista=false){
        //Verifica se o livro especificado já foi cadastrado no Banco de Dados, 
        //ou se já foi adicionado à lista especificada no parâmetro $lista, caso este seja diferente de false. 
    
        $bd = new FabricaConexao();
        $bd->Conectar();

        if(!$lista){ //Verifica se já foi cadastrado no BD
           $sql = "SELECT titulo FROM livros WHERE titulo = ? AND autor = ?;";    
            try{
                $result = $bd->conn->prepare($sql);
                $result->bind_param("ss",$this->titulo, $this->autor);

                if($result->execute()){
                    $result->store_result();
                    if($result->num_rows > 0){
                        $bd->conn->close();
                        return "Este livro já foi cadastrado!";
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
                return "Ocorreu um erro: ".$err->getMessage();
            }
        }
        else{//Verifica se já foi adicionado à lista
            $sql = "SELECT id_livro FROM $lista WHERE id_livro = ?;";   
            try{
                $result = $bd->conn->prepare($sql);
                $result->bind_param("i",$this->id);

                if($result->execute()){
                    $result->store_result();
                    if($result->num_rows > 0){
                        $bd->conn->close();
                        return "Você já adicionou este livro à lista!";
                    }
                    else{
                        $bd->conn->close();
                        return false;
                    }
                }
                else{
                    $bd->conn->close();
                    return "Ocorreu um erro na execução do código";
                }
            }
            catch(mysqli_sql_exception $err){
                $bd->conn->close();
                return "Ocorreu um erro: ".$err->getMessage();
            }
        }
    }

    public function DeletarLivro(){
        //Deleta um livro de todas as tabelas do Banco de Dados em que ele está presente
        if(!$this->RemoverLivro('querLer') && !$this->RemoverLivro('lidos') && !$this->RemoverLivro('lendo')){
            $bd = new FabricaConexao(); 
            $bd->Conectar();
            echo $this->id;
            $sql = "DELETE FROM livros WHERE id_livro = ?;";
            $result = $bd->conn->prepare($sql);
            
            try {
                $result->bind_param("i", $this->id);
        
                if($result->execute()){
                    return false;
                }
                else{
                    $bd->conn->close();
                    return "Ocorreu um erro na execução do código";
                }
            }
            catch(mysqli_sql_exception $err){
                $bd->conn->close();
                return "Ocorreu um erro: ".$err->getMessage();
            }
        }
        else{
            return "Ocorreu um erro na execução do código";
        }
    }

    public function RemoverLivro($lista){
        //Remove um livro de uma lista específica
        $bd = new FabricaConexao(); 
        $bd->Conectar();
        echo $this->id;
        $sql = "DELETE FROM $lista WHERE id_livro = ?;";
        $result = $bd->conn->prepare($sql);
        
        try {
            $result->bind_param("i", $this->id);
    
            if($result->execute()){
                $bd->conn->close();
                return false;
            }
            else{
                $bd->conn->close();
                return "Ocorreu um erro na execução do código";
            }
        }
        catch(mysqli_sql_exception $err){
            $bd->conn->close();
            return "Ocorreu um erro: ".$err->getMessage();
        }
    }

    public function ListarLivros($lista=false, $id_usuario=false){
        if($lista){
            $sql = "SELECT id_livro, titulo, autor, data_publicacao FROM livros INNER JOIN $lista using(id_livro) WHERE id_usuario = $id_usuario";
            $msg = "Você ainda não adicionou nenhum livro a esta lista!";
        }
        else{
            $sql = "SELECT * FROM livros";
            $msg = "Não há nenhum livro cadastrado!";
        }
        $bd = new FabricaConexao();
        $bd->Conectar();
        
        $result = $bd->conn->prepare($sql);
        if($result->execute()){
            $result->store_result();
        }
        else{
            return false;
        }     

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

            if(!$lista){
                while ($result->fetch()) {
                    echo "<tr>
                    <td>" . $num."</td> 
                    <td>" . $titulo."</td>
                    <td>" . $autor."</td>
                    <td>" . $data."</td>
                    <td> <a class='btn btn-sm btn-primary' href='../controller/acaoLivro.php?acao=querLer&id_livro=".$id."'>Quero ler</a>
                    <td> <a class='btn btn-sm btn-primary' href='../controller/acaoLivro.php?acao=lendo&id_livro=".$id."'>Estou lendo</a>
                    <td> <a class='btn btn-sm btn-primary' href='../controller/acaoLivro.php?acao=lidos&id_livro=".$id."'>Já lí</a>
                    <td> <a class='btn btn-sm btn-danger' href='../controller/acaoLivro.php?acao=deletar&id_livro=".$id."'>Deletar</a>
                    </tr>";
                    $num++;
                }
            }
            else{
                while ($result->fetch()) {
                    echo "<tr>
                    <td>" . $num."</td> 
                    <td>" . $titulo."</td>
                    <td>" . $autor."</td>
                    <td>" . $data."</td>
                    <td> <a class='btn btn-sm btn-danger' href='../controller/acaoLivro.php?acao=remover&lista=$lista&id_livro=".$id."'>Remover Desta Lista</a>
                    </tr>";
                    $num++;
                }
            }
            echo"</tbody></table></body>";
        }
        else{
            echo($msg);
        }
      } 
}
?>