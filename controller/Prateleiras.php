<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../model/CrudPrateleiras.php';

 class Prateleiras extends CrudPrateleiras{
    
    protected $tabela = 'prateleira';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idprateleira) {
        $sql = "SELECT * FROM $this->tabela WHERE idprateleira = :idprateleira";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idprateleira', $idprateleira, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela ( descricaoprateleira, idcategoria, quantidadefrascos) VALUES ( :descricaoprateleira, :idcategoria, :quantidadefrascos)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcategoria', $this->idcategoria);
        $stm->bindParam(':descricaoprateleira', $this->descricaoprateleira);
        $stm->bindParam(':quantidadefrascos', $this->quantidadefrascos);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idprateleira) {
        $sql = "UPDATE $this->tabela SET  idcategoria = :idcategoria, descricaoprateleira = :descricaoprateleira, quantidadefrascos = :quantidadefrascos WHERE idprateleira = :idprateleira";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idprateleira', $idprateleira, PDO::PARAM_INT);
        $stm->bindParam(':idcategoria', $this->idcategoria);
        $stm->bindParam(':descricaoprateleira', $this->descricaoprateleira);
        $stm->bindParam(':quantidadefrascos', $this->quantidadefrascos);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idprateleira) {
        $sql = "DELETE FROM $this->tabela WHERE idprateleira = :idprateleira";
        $stm = DBprateleira::prepare($sql);
        $stm->bindParam(':idprateleira', $idprateleira, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>