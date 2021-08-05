<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../model/CrudMarcas.php';

 class Marcas extends CrudMarcas{
    
    protected $tabela = 'marca';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idmarca) {
        $sql = "SELECT * FROM $this->tabela WHERE idmarca = :idmarca";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idmarca', $idmarca, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (nomemarca) VALUES ( :nomemarca)";
        $stm = DB::prepare($sql);
        //$stm->bindParam(':idmarca', $this->idmarca);
        $stm->bindParam(':nomemarca', $this->nomemarca);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idmarca) {
        $sql = "UPDATE $this->tabela SET  idmarca = :idmarca, nomemarca = :nomemarca WHERE idmarca = :idmarca";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idmarca', $idmarca, PDO::PARAM_INT);
        $stm->bindParam(':nomemarca', $this->nomemarca);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idmarca) {
        $sql = "DELETE FROM $this->tabela WHERE idmarca = :idmarca";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idmarca', $idmarca, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>