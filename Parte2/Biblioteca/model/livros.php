<?php 
class Livros{
    private $id;
    private $titulo;
    private $autor;
    private $dataPublicacao;

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
        $this->dataPublicacao = $param_data;
    }
}
?>