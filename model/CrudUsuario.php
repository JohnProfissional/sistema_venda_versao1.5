<?php
	include "controller/conexao/conexao_Usuario/DB_Usuario.php"; 

abstract class CrudUsuario extends DB_Usuario
{
		protected $tabela;
		public $idusuario;
		public $usuario;
		public $senha ;
		public $idnivelacesso;
		public $email;



	public function setIdUsuario($idusuario){
		$this->idusuario = $idusuario;
	}

	public function getIdUsuario(){
		return $this->idIdUsuario;
	} 

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getUsuario(){
		return $this->usuario;
	} 


	public function setSenha($senha){
		$this->senha=$senha;
	}

	public function getSenha(){
		return $this->senha; 
	}

	public function setDataVenda($idnivelacesso){
		$this->idnivelacesso=$idnivelacesso;
	}

	public function getIdNivelAcesso(){
		return $this->idnivelacesso;
	}


	public function setEmail($email){
		$this->email=$email;
	}

	public function getEmail(){
		return $this->email;
	}

	

}