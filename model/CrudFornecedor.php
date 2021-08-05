<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";     //inclui arquivo DB

 abstract class CrudFornecedor extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $idfornecedor;
    public $razaosocial;
    public $nomefantasia ;
    public $cnpj;

     


    public function setRazaosocial($razaosocial) 
    {
        $this->razaosocial = $razaosocial;
    }

    public function getRazaosocial() 
    {
        return $this->razaosocial;
    }
    

    public function setNomefantasia ($nomefantasia ) 
    {
        $this->nomefantasia  = $nomefantasia ;
    }

    public function getNomefantasia () 
    {
        return $this->nomefantasia ;
    }

    public function setCnpj($cnpj) 
    {
        $this->cnpj = $cnpj;
    }

    public function getCnpj() 
    {
        return $this->cnpj;
    }
}

