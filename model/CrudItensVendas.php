<?php
	include "../../controller/conexao/conexao_ItensVenda/DB_ItensVenda.php"; 
	

abstract class CrudItensVendas extends DB_ItensVenda
{
		protected $tabela;
		public $idvenda;
		public $idproduto;
		public $quantidade;
		public $valorvenda;
		public $desconto;

	public function setIdItensVenda($iditensvendas){
		$this->iditensvendas = $iditensvendas;
	}

	public function getIdItensVenda(){
		return $this->iditensvendas;
	} 

	public function setIdVenda($idvenda){
		$this->idvenda=$idvenda;
	}

	public function getIdCliente(){
		return $this->idvenda; 
	}

	public function setIdProduto($idproduto){
		$this->idproduto=$idproduto;
	}

	public function getIdProduto(){
		return $this->idproduto;
	}

	public function setQuantidade($quantidade){
		$this->quantidade=$quantidade;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}

	public function setValorVenda($valorvenda){
		$this->valorvenda=$valorvenda;
	}

	public function getValorVenda(){
		return $this->valorvenda;
	}

	public function setDesconto($desconto){
		$this->desconto=$desconto;
	}

	public function getDesconto(){
		return $this->desconto;
	}

	

}








?>