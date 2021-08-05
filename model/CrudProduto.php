<?php
	include "../controller/class/DB.php"; 

abstract class CrudProdutos extends DB
{
		protected $tabela;
		public $idproduto;
		public $nomedoproduto;
		public $idmarca;
		public $idcategoria;
		public $datavencimento;
		

	public function setIdProduto($idproduto){
		$this->idproduto = $idproduto;
	}

	public function getIdProduto(){
		return $this->idproduto;
	} 


	public function setNomeProduto($nomedoproduto){
		$this->nomedoproduto=$nomedoproduto;
	}

	public function getNomeProduto(){
		return $this->nomedoproduto; 
	}

	public function setIdMarca($idmarca){
		$this->idmarca=$idmarca;
	}

	public function getIdMarca(){
		return $this->idmarca;
	}

	public function setCategoria($idcategoria){
		$this->idcategoria=$idcategoria;
	}

	public function getCategoria(){
		return $this->idcategoria;
	}

	public function setDataVencimento($datavencimento){
		$this->datavencimento=$datavencimento;
	}

	public function getDataVencimento(){
		return $this->datavencimento;
	}
	

}








?>