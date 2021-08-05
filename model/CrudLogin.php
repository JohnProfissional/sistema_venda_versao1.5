<?php
	require_once '../controller/class/DB.php';

abstract class CrudLogin extends DB
{
		protected $tabela;
		public $idusuario;
		public $usuario;
		public $senha;


	public function setIdusuario($idusuario){
		$this->idusuario = $idusuario;
	}

	public function getIdItensVenda(){
		return $this->idusuario;
	} 

	public function setIdVenda($usuario){
		$this->usuario=$usuario;
	}

	public function getIdCliente(){
		return $this->usuario; 
	}

	public function setIdProduto($senha){
		$this->senha=$senha;
	}

	public function getIdProduto(){
		return $this->senha;
	}


}


?>