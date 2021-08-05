<?php
##salvar como CrudProdutos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";    //inclui arquivo DB

 abstract class CrudPrateleiras extends DB {   //faz herança do arquivo DB
    
    //Nome da tabela e Atributos
    protected $tabela;
    public $idprateleira;
    public $idcategoria;
    public $descricaoprateleira;
    public $quantidadefrascos;
        

public function setIdprateleira($idprateleira) {
        $this->idprateleira = $idprateleira;
    }
    public function getIdprateleira() {
        return $this->idprateleira;
    }
    public function setIdcategoria($idcategoria) {
        $this->idcategoria = $idcategoria;
    }
    public function getIdcategoria() {
        return $this->idcategoria;
    }
    public function setDescricaoprateleira($descricaoprateleira) {
        $this->descricaoprateleira = $descricaoprateleira;
    }
    public function getDescricaoprateleira() {
        return $this->descricaoprateleira;
    }
    public function setQuantidadefrascos($quantidadefrascos) {
        $this->quantidadefrascos = $quantidadefrascos;
    }
    public function getQuantidadefrascos() {
        return $this->quantidadefrascos;
    }
      
}

?>