
<?php
include_once '../../model/CrudVendas.php';
 class Vendas extends CrudVendas {
    
     protected $tabela = 'venda';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idvenda) {
        $sql = "SELECT * FROM $this->tabela WHERE idvenda = :idvenda";
        $stm = DB_Venda::prepare($sql);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB_Venda::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    

     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela(idcliente,datavenda) VALUES (:idcliente,:datavenda)";
        $stm = DB_Venda::prepare($sql);
        $stm->bindParam(':idcliente', $this->idcliente);
        $stm->bindParam(':datavenda', $this->datavenda);
        $stm->execute();
         return DB_Venda::lastInsertId();
     
    }
    
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET idvenda = :idvenda, idcliente = :idcliente, datavenda=:datavenda WHERE idvenda = :idvenda";
        $stm = DB_Venda::prepare($sql);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
        $stm->bindParam(':idcliente', $this->idcliente);
        $stm->bindParam(':datavenda', $this->datavenda);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idvenda) {
        $sql = "DELETE FROM $this->tabela WHERE idvenda = :idvenda";
        $stm = DB_Venda::prepare($sql);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
        return $stm->execute();
    }



  public function findOne($idvenda)
    {
        $query = "SELECT * FROM $this->tabela WHERE idvenda = :idvenda";
        $stm = DB_Venda::prepare($query);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
        $stm->execute();
         
    }

    
     public function Mostrar_Venda() {
        $sql = "SELECT datavenda, descontototal,descontoacerto,valortotal FROM $this->tabela order by idvenda DESC LIMIT 1";
        $stm = DB_Venda::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
}


?>