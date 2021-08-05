<?php
##salvar como CrudProdutos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";    //inclui arquivo DB

 abstract class CrudCategorias extends DB {   //faz herança do arquivo DB
    
    //Nome da tabela e Atributos
    protected $tabela;
    public $idcategoria;
    public $nome_categoria;
        

public function setIdcategoria($idcategoria) {
        $this->idcategoria = $idcategoria;
    }
    public function getIdcategoria() {
        return $this->idcategoria;
    }
    public function setNome_categoria($nome_categoria) {
        $this->nome_categoria = $nome_categoria;
    }
    public function getNome_categoria() {
        return $this->nome_categoria;
    }
    
}

?>