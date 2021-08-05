<?php

/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../model/CrudItensDevolucao.php';

 class ItensDevolucao extends CrudItensDevolucao {
    
    protected $tabela = 'itensdevolucao';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($iditensdevolucao) {
        $sql = "SELECT * FROM $this->tabela WHERE iditensdevolucao = :iditensdevolucao";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iditensdevolucao', $iditensdevolucao, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (iddevolucao,idproduto, quantidade_devolvida, datadevolvida) VALUES (:iddevolucao, :idproduto, :quantidade_devolvida, :datadevolvida)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iddevolucao', $this->iddevolucao);
        $stm->bindParam(':idproduto', $this->idproduto);
        $stm->bindParam(':quantidade_devolvida', $this->quantidade_devolvida);
        $stm->bindParam(':datadevolvida', $this->datadevolvida);
        return $stm->execute();
    }
    
    //update de itens
    public function update($iditensdevolucao) {
        $sql = "UPDATE $this->tabela SET iddevolucao = :iddevolucao, idproduto = :idproduto, quantidade_devolvida = :quantidade_devolvida, datadevolvida = :datadevolvida WHERE iditensdevolucao = :idintesdevolucao";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iditensdevolucao', $iditensdevolucao, PDO::PARAM_INT);
        $stm->bindParam(':iddevolucao', $this->iddevolucao);
        $stm->bindParam(':idproduto', $this->idproduto);
        $stm->bindParam(':quantidade_devolvida', $this->quantidade_devolvida);
        $stm->bindParam(':datadevolvida', $this->datadevolvida);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idintesdevolucao) {
        $sql = "DELETE FROM $this->tabela WHERE iditensdevolucao = :iditensdevolucao";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iditensdevolucao', $iditensdevolucao, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
