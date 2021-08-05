<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../../controller/conexao/conexao_Entrada/DB_Entrada.php";    //inclui arquivo DB

 abstract class CrudEntrada extends DB_Entrada{   //faz herança do arquivo DB
    
    protected $tabela;
    public $identrada;
    public $idusuario;
    public $idfornecedor;
    public $valortotaldanota;
    public $datacompra;


    
    
    


    public function setIdusuario($idusuario) 
    {
        $this->idusuario = $idusuario;
    }

    public function getIdusuario() 
    {
        return $this->idusuario;
    }
    
    public function setIdfornecedor($idfornecedor) 
    {
        $this->idfornecedor = $idfornecedor;
    }

    public function getIdfornecedor() 
    {
        return $this->idfornecedor;
    }

    public function setValortotaldanota($valortotaldanota) 
    {
        $this->valortotaldanota = $valortotaldanota;
    }

    public function getValortotaldanota() 
    {
        return $this->valortotaldanota;
    }

    public function setDatacompra($datacompra) 
    {
        $this->datacompra = $datacompra;
    }

    public function getDatacompra() 
    {
        return $this->datacompra;
    }
}

