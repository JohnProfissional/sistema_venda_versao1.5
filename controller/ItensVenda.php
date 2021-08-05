
<?php

include_once '../../model/CrudItensVendas.php';
 
 class ItensVendas extends CrudItensVendas {
    
    protected $tabela = 'itens_vendas';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($iditensvendas) {
        $sql = "SELECT * FROM $this->tabela WHERE iditensvendas = :iditensvenda";
        $stm = DB_ItensVenda::prepare($sql);
        $stm->bindParam(':iditensvenda', $iditensvenda, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB_ItensVenda::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    

     //faz insert   
     public function insert() {
        $sql = "INSERT INTO $this->tabela (idvenda,idproduto,quantidade_itens,valor,desconto) VALUES (:idvenda,:idproduto,:quantidade_itens,:valor,:desconto)";

        $stm = DB_Itensvenda::prepare($sql);
        $stm->bindParam(':idvenda', $this->idvenda);
        $stm->bindParam(':idproduto', $this->idproduto);
        $stm->bindParam(':quantidade_itens',$this->quantidade_itens);
        $stm->bindParam(':valor', $this->valor);
        $stm->bindParam(':desconto', $this->desconto);
        return $stm->execute();
    }
    
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE iditensvendas = :iditensvendas";
        $stm = DB_ItensVenda::prepare($sql);
        $stm->bindParam(':iditensvendas', $iditensvendas, PDO::PARAM_INT);
        $stm->bindParam(':idcliente', $this->idcliente);
        $stm->bindParam(':datavenda', $this->datavenda);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE iditensvendas = :iditensvendas";
        $stm = DB_ItensVenda::prepare($sql);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}

?>