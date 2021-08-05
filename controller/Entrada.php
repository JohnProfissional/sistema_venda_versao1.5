<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../../model/CrudEntrada.php';

 class Entrada extends CrudEntrada{
    
    protected $tabela = 'entrada';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($identrada) {
        $sql = "SELECT * FROM $this->tabela WHERE identrada = :identrada";
        $stm = DB_Entrada::prepare($sql);
        $stm->bindParam(':identrada', $identrada, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB_Entrada::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela ( idfornecedor, dataentrada) VALUES (:idfornecedor, :dataentrada)";
        $stm = DB_Entrada::prepare($sql);
        $stm->bindParam(':idfornecedor', $this->idfornecedor);
        $stm->bindParam(':dataentrada', $this->dataentrada);
        $stm->execute();
        return DB_Entrada::lastInsertId();
    }
    
    //update de itens
    public function update($identrada) {
        $sql = "UPDATE $this->tabela SET  idusuario  = :idusuario, idfornecedor  = :idfornecedor, valortotaldanota = :valortotaldanota, datacompra = :datacompra WHERE identrada = :identrada";
        $stm = DB_Entrada::prepare($sql);
        $stm->bindParam(':identrada', $identrada, PDO::PARAM_INT);
        $stm->bindParam(':idusuario', $this->idusuario);
        $stm->bindParam(':idfornecedor', $this->idfornecedor);
        $stm->bindParam(':valortotaldanota', $this->valortotaldanota);
        $stm->bindParam(':dataentrada', $this->dataentrada);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($identrada) {
        $sql = "DELETE FROM $this->tabela WHERE identrada = :identrada";
        $stm = DB_Entrada::prepare($sql);
        $stm->bindParam(':identrada', $identrada, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>