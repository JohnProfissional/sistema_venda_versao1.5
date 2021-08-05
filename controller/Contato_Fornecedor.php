<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../model/CrudContato_Fornecedor.php';

 class Contato_Fornecedor extends CrudContato_Fornecedor{
    
    protected $tabela = 'contato_fornecedor';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idcontatofornecedor) {
        $sql = "SELECT * FROM $this->tabela WHERE idcontatofornecedor =:idcontatofornecedor";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcontatofornecedor', $idcontatofornecedor, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (idfornecedor, telefone_fornecedor, email_fornecedor, whatsappfornecedor) VALUES (:idfornecedor, :telefone_fornecedor,:email_fornecedor,:whatsappfornecedor)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idfornecedor', $this->idfornecedor);
        $stm->bindParam(':telefone_fornecedor', $this->telefone_fornecedor);
        $stm->bindParam(':email_fornecedor', $this->email_fornecedor);
        $stm->bindParam(':whatsappfornecedor', $this->whatsappfornecedor);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idcontatofornecedor) {
        $sql = "UPDATE $this->tabela SET  idfornecedor  = :idfornecedor, telefone_fornecedor  = :telefone_fornecedor, email_fornecedor = :email_fornecedor, whatsappfornecedor = :whatsappfornecedor WHERE idcontatofornecedor = :idcontatofornecedor";

        $stm = DB::prepare($sql);
        $stm->bindParam(':idcontatofornecedor', $idcontatofornecedor, PDO::PARAM_INT);
        $stm->bindParam(':idfornecedor', $this->idfornecedor);
        $stm->bindParam(':telefone_fornecedor', $this->telefone_fornecedor);
        $stm->bindParam(':email_fornecedor', $this->email_fornecedor);
        $stm->bindParam(':whatsappfornecedor', $this->whatsappfornecedor);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idcontatofornecedor) {
        $sql = "DELETE FROM $this->tabela WHERE idcontatofornecedor = :idcontatofornecedor";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcontatofornecedor', $idcontatofornecedor, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>