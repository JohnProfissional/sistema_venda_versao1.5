<?php
	include "../../controller/conexao/conexao_Venda/DB_Venda.php"; 

abstract class CrudVendas extends DB_Venda
{
		protected $tabela;
		public $idvenda;
		public $idcliente;
		public $datavenda;
		
		

	public function setIdVenda($idvenda){
		$this->idvenda = $idvenda;
	}

	public function getIdVenda(){
		return $this->idvenda;
	} 


	public function setIdCliente($idcliente){
		$this->idcliente=$idcliente;
	}

	public function getIdCliente(){
		return $this->idcliente; 
	}

	

	public function setDataVenda($datavenda){
		$this->datavenda=$datavenda;
	}

	public function getDataVenda(){
		return $this->datavenda;
	}

	/*aqui criou função que sera usadas no arquivos seguintes com tabelas que precise retornar o ultimo id*/
    public static function lastInsertId(){
        return self::getInstance()->lastInsertId();
    }
	

}








?>