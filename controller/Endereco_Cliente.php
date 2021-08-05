<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../../model/CrudEndereco_Cliente.php';

 class Endereco_Cliente extends CrudEndereco_Cliente{
    
    protected $tabela = 'endereco_cliente';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idendereco_cliente) {
        $sql = "SELECT * FROM $this->tabela WHERE idendereco_cliente = :idendereco_cliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idendereco_cliente', $idendereco_cliente, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (idcliente, cidade, estado, bairro,rua,numero,cep) VALUES (:idcliente, :cidade, :estado, :bairro,:rua,:numero, :cep)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcliente', $this->idcliente);
        $stm->bindParam(':cidade', $this->cidade);
        $stm->bindParam(':estado', $this->estado);
        $stm->bindParam(':bairro', $this->bairro);
        $stm->bindParam(':rua', $this->rua);
        $stm->bindParam(':numero', $this->numero);
        $stm->bindParam(':cep', $this->cep);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idendereco_cliente) {
        $sql = "UPDATE $this->tabela SET idcliente = :idcliente, cidade  = :cidade, estado = :estado, bairro = :bairro, rua = :rua, numero = :numero, cep = :cep WHERE idendereco_cliente = :idendereco_cliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idendereco_cliente', $idendereco_cliente, PDO::PARAM_INT);
        $stm->bindParam(':idcliente', $this->idcliente);
        $stm->bindParam(':cidade', $this->cidade);
        $stm->bindParam(':estado', $this->estado);
        $stm->bindParam(':bairro', $this->bairro);
        $stm->bindParam(':rua', $this->rua);
        $stm->bindParam(':numero', $this->numero);
        $stm->bindParam(':cep', $this->cep);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idendereco_cliente) {
        $sql = "DELETE FROM $this->tabela WHERE idendereco_cliente = :idendereco_cliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idendereco_cliente', $idendereco_cliente, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>