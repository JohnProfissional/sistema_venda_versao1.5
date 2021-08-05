<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";     //inclui arquivo DB

 abstract class CrudContato_Fornecedor extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $idcontatofornecedor;
    public $idfornecedor;
    public $telefone_fornecedor;
    public $email_fornecedor;
    public $whatsappfornecedor;

   
       public function setIdFornecedor($idfornecedor) 
    {
        $this->idfornecedor = $idfornecedor;
    }

    public function getIdfornecedor() 
    {
        return $this->idfornecedor;
    }

    public function setTelefone_fornecedor($telefone_fornecedor) 
    {
        $this->telefone_fornecedor = $telefone_fornecedor;
    }

    public function getTelefone_fornecedor() 
    {
        return $this->telefone_fornecedor;
    }
    
    public function setEmail_fornecedor($email_fornecedor) 
    {
        $this->email_fornecedor = $email_fornecedor;
    }

    public function getEmail_fornecedor() 
    {
        return $this->email_fornecedor;
    }

    public function setWhatsappfornecedor($whatsappfornecedor) 
    {
        $this->whatsappfornecedor = $whatsappfornecedor;
    }

    public function getWhatsappfornecedor() 
    {
        return $this-> $whatsappfornecedor;
    }


}

