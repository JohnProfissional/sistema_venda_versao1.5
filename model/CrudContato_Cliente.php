<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once "../../controller/conexao/conexao_contato_cliente/DB_Contato_Cliente.php";   //inclui arquivo DB

 abstract class CrudContato_Cliente extends DB_Contato_Cliente{   //faz herança do arquivo DB
    
    protected $tabela;
    public $idcliente;
    public $idcontatocliente;
    public $telefone;
    public $email;
    public $whatsapp;

    public function setIdcontatocliente($idcontatocliente)
    {
        $this->idcontatocliente = $idcontatocliente;
    }

    public function getIdcontatocliente()
    {
        return $this->idcontatocliente;
    }

       public function setIdcliente($idcliente) 
    {
        $this->idcliente = $idcliente;
    }

    public function getIdcliente() 
    {
        return $this->idcliente;
    }

    public function setTelefone($telefone) 
    {
        $this->telefone = $telefone;
    }

    public function getTelefone() 
    {
        return $this->telefone;
    }
    
    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function setWhatsapp($whatsapp) 
    {
        $this->whatsapp = $whatsapp;
    }

    public function getWhatsapp() 
    {
        return $this->whatsapp;
    }


}

