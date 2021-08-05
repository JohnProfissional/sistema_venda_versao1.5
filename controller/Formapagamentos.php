<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../model/CrudFormapagamento.php';

 class Formaspagamentos extends CrudFormapagamento{
    
    protected $tabela = 'forma_de_pagamento';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idmarca) {
        $sql = "SELECT * FROM $this->tabela WHERE idforma_de_pagamento = :idforma_de_pagamento";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idforma_de_pagamento', $idforma_de_pagamento, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (tipo_pagamento) VALUES ( :tipo_pagamento)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':tipo_pagamento', $this->tipo_pagamento);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idforma_de_pagamento) {
        $sql = "UPDATE $this->tabela SET  idforma_de_pagamento = :idforma_de_pagamento, tipo_pagamento = :tipo_pagamento WHERE idforma_de_pagamento = :idforma_de_pagamento";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idforma_de_pagamento', $idforma_de_pagamento, PDO::PARAM_INT);
        $stm->bindParam(':tipo_pagamento', $this->tipo_pagamento);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idforma_de_pagamento) {
        $sql = "DELETE FROM $this->tabela WHERE idforma_de_pagamento = :idforma_de_pagamento";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idforma_de_pagamento', $idforma_de_pagamento, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>