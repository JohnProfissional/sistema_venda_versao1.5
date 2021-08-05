<?php
##salvar como CrudProdutos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";    //inclui arquivo DB

 abstract class CrudMarcas extends DB {   //faz herança do arquivo DB
    
    //Nome da tabela e Atributos
    protected $tabela;
    public $idmarca;
    public $nomemarca;
        

public function setIdmarca($idmarca) {
        $this->idmarca = $idmarca;
    }
    public function getIdmarca() {
        return $this->idmarca;
    }
    public function setNomemarca($nomemarca) {
        $this->nomemarca = $nomemarca;
    }
    public function getNomemarca() {
        return $this->nomemarca;
    }
    
}

?>