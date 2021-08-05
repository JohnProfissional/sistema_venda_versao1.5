
<?php

require_once '../../model/CrudCliente.php';

 class Clientes extends CrudClientes {
    
    protected $tabela = 'cliente';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idcliente) {
        $sql = "SELECT * FROM $this->tabela WHERE idcliente = :idcliente";
        $stm = DB_Cliente::prepare($sql);
        $stm->bindParam(':idcliente', $idcliente, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB_Cliente::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela(nomecliente,cpfcliente,rgcliente,sexocliente,datanascimento) VALUES ( :nomecliente,:cpfcliente,:rgcliente,:sexocliente,:datanascimento)";
        $stm = DB_Cliente::prepare($sql);
        $stm->bindParam(':nomecliente', $this->nomecliente);
        $stm->bindParam(':cpfcliente', $this->cpfcliente);
        $stm->bindParam(':rgcliente', $this->rgcliente);
        $stm->bindParam(':sexocliente', $this->sexocliente);
        $stm->bindParam(':datanascimento', $this->datanascimento);
        $stm->execute();
        return DB_Cliente::lastInsertId();
    }
    
    //update de itens
    public function update($idcliente) {
        $sql = "UPDATE $this->tabela SET nomecliente = :nomecliente, idcliente=:idcliente, cpfcliente=:cpfcliente,rgcliente=:rgcliente,sexocliente=:sexocliente,datanascimento=:datanascimento WHERE idcliente = :idcliente";
        $stm = DB_Cliente::prepare($sql);
        $stm->bindParam(':idcliente', $idcliente, PDO::PARAM_INT);
        $stm->bindParam(':nomecliente', $nomecliente);
        $stm->bindParam(':cpfcliente', $cpfcliente);
        $stm->bindParam(':rgcliente', $rgcliente);
        $stm->bindParam(':sexocliente', $sexocliente);
        $stm->bindParam(':datanascimento', $datanascimento);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE idcliente = :idcliente";
        $stm =DB_Cliente::prepare($sql);
        $stm->bindParam(':idcliente', $idcliente, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}


?>