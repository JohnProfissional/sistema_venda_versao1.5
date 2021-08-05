<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */



require_once '../model/CrudCategoria/CrudCategorias.php';

 class Categorias extends CrudCategorias{
    
    protected $tabela = 'categoria';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idcategoria) {
        $sql = "SELECT * FROM $this->tabela WHERE idcategoria = :idcategoria";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (nome_categoria) VALUES ( :nome_categoria)";
        $stm = DB::prepare($sql);
        //$stm->bindParam(':idcategoria', $this->idcategoria);
        $stm->bindParam(':nome_categoria', $this->nome_categoria);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idcategoria) {
        $sql = "UPDATE $this->tabela SET  idcategoria = :idcategoria, nome_categoria = :nome_categoria WHERE idcategoria = :idcategoria";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
        $stm->bindParam(':nome_categoria', $nome_categoria, PDO::PARAM_INT);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idcategoria) {
        $sql = "DELETE FROM $this->tabela WHERE idcategoria = :idcategoria";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>