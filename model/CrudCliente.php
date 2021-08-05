<?php

include_once"../../controller/conexao/cliente/conexao_Cliente/DB_Cliente.php"; 



abstract class CrudClientes extends DB_Cliente
{
		protected $tabela;
		
		public $nomecliente;
		public $cpfcliente;
		public $rgcliente;
		public $sexocliente;
		public $datanascimento;
		

	public function setNome($nomecliente){
		$this->nomecliente=$nomecliente;
	}

	public function getNome(){
		return $this->nomecliente; 
	}

	public function setCpfCliente($cpfcliente){
		$this->cpfcliente=$cpfcliente;
	}

	public function getCpfCliente(){
		return $this->cpfcliente;
	}


	public function setRgCliente($rgcliente){
		$this->rgcliente=$rgcliente;
	}

	public function getRgCliente(){
		return $this->rgcliente;
	}

	public function setSexoCliente($sexocliente){
		$this->sexocliente=$sexocliente;
	}

	public function getSexoCliente(){
		return $this->sexocliente;
	}
	
	public function setDataNascimento($datanascimento){
		$this->datanascimento=$datanascimento;
	}

	public function getDataNascimento(){
		return $this->datanascimento;
	}

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



?>