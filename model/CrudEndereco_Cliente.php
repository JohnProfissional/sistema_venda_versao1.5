<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../../controller/conexao/conexao_endereco_cliente/DB_Endereco_Cliente.php";    //inclui arquivo DB

 abstract class CrudEndereco_Cliente extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $idcliente;
    public $idendereco_cliente;
    public $cidade;
    public $estado;
    public $bairro;
    public $rua;
    public $numero;
    public $cep;
  

    public function setIdendereco_cliente($idendereco_cliente) 
    {
        $this->idendereco_cliente = $idendereco_cliente;
    }

    public function getIdendereco_cliente() 
    {
        return $this->idendereco_cliente;
    }
    public function setIdcliente($idcliente) 
    {
        $this->idcliente = $idcliente;
    }

    public function getIdcliente() 
    {
        return $this->idcliente;
    }

    public function setCidade($cidade) 
    {
        $this->cidade = $cidade;
    }

    public function getCidade() 
    {
        return $this->cidade;
    }
    
    public function setEstado($estado) 
    {
        $this->estado = $estado;
    }

    public function getEstado() 
    {
        return $this->estado;
    }

    public function setBairro ($bairro ) 
    {
        $this->bairro  = $bairro ;
    }

    public function getBairro () 
    {
        return $this->bairro ;
    }

    public function setRua ($rua ) 
    {
        $this->rua  = $rua ;
    }

    public function getRua () 
    {
        return $this->rua ;
    }

     public function setNumero  ($numero  ) 
    {
        $this->numero   = $numero  ;
    }

    public function getNumero() 
    {
        return $this->numero  ;
    }

     public function setCep  ($cep  ) 
    {
        $this->cep   = $cep  ;
    }

    public function getCep() 
    {
        return $this->cep  ;
    }


}

