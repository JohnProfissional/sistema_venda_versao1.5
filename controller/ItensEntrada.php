<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../../model/CrudItensEntrada.php';


 class ItensEntrada extends CrudItensEntrada{
  
    
    protected $tabela = 'itensentrada';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($iditensentrada) {
        $sql = "SELECT * FROM $this->tabela WHERE iditensentrada = :iditensentrada";
        $stm = DB_ItensEntrada::prepare($sql);
        $stm->bindParam(':iditensentrada', $iditensentrada, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm =DB_ItensEntrada::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
   
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (identrada, idproduto, precocompra,quantidade,unidade,ipi,frete,icms) VALUES (:identrada,:idproduto,:precocompra,:quantidade,:unidade,:ipi,:frete,:icms)";

        $stm = DB_ItensEntrada::prepare($sql);
        $stm->bindParam(':identrada', $this->identrada);
        $stm->bindParam(':idproduto', $this->idproduto);
        $stm->bindParam(':precocompra', $this->precocompra);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':unidade', $this->unidade);
        $stm->bindParam(':ipi', $this->ipi);
        $stm->bindParam(':frete', $this->frete);
        $stm->bindParam(':icms', $this->icms);
        return $stm->execute();
    }
    
    //update de itens
    public function update($iditensentrada) {
        $sql = "UPDATE $this->tabela SET identrada = :identrada, idproduto = :idproduto, precocompra = :precocompra, quantidadeitensentrada =:quantidadeitensentrada, unidade = :unidade, ipi = :ipi, frete_itensentrada = :frete_itensentrada, icms = :icms, WHERE iditensentrada = :iditensentrada";
        $stm =DB_ItensEntrada::prepare($sql);
        $stm->bindParam(':iditensentrada', $iditensentrada, PDO::PARAM_INT);
        $stm->bindParam(':identrada', $this->identrada);
        $stm->bindParam(':idproduto', $this->idproduto);
        $stm->bindParam(':precocompra', $this->precocompra);
        $stm->bindParam(':quantidadeitensentrada', $this->quantidadeitensentrada);
        $stm->bindParam(':unidade', $this->unidade);
        $stm->bindParam(':ipi', $this->ipi);
        $stm->bindParam(':frete_itensentrada', $this->frete_itensentrada);
        $stm->bindParam(':icms', $this->icms);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($iditensentrada) {
        $sql = "DELETE FROM $this->tabela WHERE iditensentrada = :iditensentrada";
        $stm =DB_ItensEntrada::prepare($sql);
        $stm->bindParam(':iditensentrada', $iditensentrada, PDO::PARAM_INT);
        return $stm->execute();
    }
 
    public function Mostrar_Itens_Entrada(){
        $sql = "SELECT * FROM $this->tabela ORDER BY iditensentrada DESC LIMIT 1";
        $stm =DB_ItensEntrada::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
}
?>