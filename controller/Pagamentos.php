<?php

/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../model/CrudPagamentos.php';

 class Pagamentos extends CrudPagamentos{
    
    protected $tabela = 'pagamento';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idpagamento) {
        $sql = "SELECT * FROM $this->tabela WHERE idpagamento = :idpagamento";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idpagamento', $idpagamento, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (idparcelas, idforma_de_pagamento, valor_pagamento, data_pagamento, numerosdeparcelas) VALUES (  :idparcelas, :idforma_de_pagamento, :valor_pagamento, :data_pagamento, :numerosdeparcelas)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idparcelas', $this->idparcelas);
        $stm->bindParam(':idforma_de_pagamento', $this->idforma_de_pagamento);
        $stm->bindParam(':valor_pagamento', $this->valor_pagamento);
        $stm->bindParam(':data_pagamento', $this->data_pagamento);
        $stm->bindParam(':numerosdeparcelas', $this->numerosdeparcelas);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idpagamento) {
        $sql = "UPDATE $this->tabela SET idpagamento = :idpagamento, idparcelas = :idparcelas, idforma_de_pagamento = :idforma_de_pagamento, valor_pagamento = :valor_pagamento, data_pagamento = :data_pagamento, numerosdeparcelas = :numerosdeparcelas WHERE idpagamento = :idpagamento";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idpagamento', $idpagamento, PDO::PARAM_INT);
        $stm->bindParam(':idparcelas', $this->idparcelas);
        $stm->bindParam(':idforma_de_pagamento', $this->idforma_de_pagamento);
        $stm->bindParam(':valor_pagamento', $this->valor_pagamento);
        $stm->bindParam(':data_pagamento', $this->data_pagamento);
        $stm->bindParam(':numerosdeparcelas', $this->numerosdeparcelas);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idpagamento) {
        $sql = "DELETE FROM $this->tabela WHERE idpagamento = :idpagamento";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idpagamento', $idpagamento, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>