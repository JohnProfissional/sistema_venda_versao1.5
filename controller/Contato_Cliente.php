<?php

/**
 * Salvar como Produtos.php
 * herda da classe crudProdutos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once '../../model/CrudContato_Cliente.php';

 class Contato_Cliente extends CrudContato_Cliente{
    
    protected $tabela = 'contato_cliente';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idcontatocliente) {
        $sql = "SELECT * FROM $this->tabela WHERE idcontatocliente = :idcontatocliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcontatocliente', $idcontatocliente, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela (idcliente, telefone, email, whatsapp) VALUES (:idcliente, :telefone, :email, :whatsapp)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcliente', $this->idcliente);
        $stm->bindParam(':telefone', $this->telefone);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':whatsapp', $this->whatsapp);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idcontatocliente) {
        $sql = "UPDATE $this->tabela SET  idcliente  = :idcliente, telefone  = :telefone, email = :email, whatsapp = :whatsapp WHERE idcontatocliente = :idcontatocliente";
        $stm = DB::prepare($sql);

        $stm->bindParam(':idcontatocliente', $idcontatocliente, PDO::PARAM_INT);
        $stm->bindParam(':idcliente', $this->idcliente);
        $stm->bindParam(':telefone', $this->telefone);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':whatsapp', $this->whatsapp);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idcontatocliente) {
        $sql = "DELETE FROM $this->tabela WHERE idcontatocliente = :idcontatocliente";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idcontatocliente', $idcontatocliente, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>