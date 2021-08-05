<?php

/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

include('../controller/class/DB.php');


 class Devolucao extends CrudDevolucao {
    
    protected $tabela = 'devolucao';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($iddevolucao) {
        $sql = "SELECT * FROM $this->tabela WHERE iddevolucao = :iddevolucao";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iddevolucao', $iddevolucao, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (idvenda, quantidadedevolvida, datadevolucao, descricaodadevolucao) VALUES (:idvenda, :quantidadedevolvida,:datadevolucao,:descricaodadevolucao)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idvenda', $this->idvenda);
        $stm->bindParam(':quantidadedevolvida', $this->quantidadedevolvida);
        $stm->bindParam(':datadevolucao', $this->datadevolucao);
        $stm->bindParam(':descricaodadevolucao', $this->descricaodadevolucao);

        return $stm->execute();
    }
    
    //update de itens
    public function update($iddevolucao) {
        $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE iddevolucao = :iddevolucao";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iddevolucao', $iddevolucao, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($iddevolucao) {
        $sql = "DELETE FROM $this->tabela WHERE id = :iddevolucao";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
