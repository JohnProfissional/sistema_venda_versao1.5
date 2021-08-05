<?php

include "model/CrudUsuario.php"; 
       
 class Usuarios extends CrudUsuario{
    
    protected $tabela = 'parcelas';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idusuario) {
        $sql = "SELECT * FROM $this->tabela WHERE idusuario = :idusuario";
        $stm = DB_Usuario::prepare($sql);
        $stm->bindParam(':idusuario', $idusuario, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB_Usuario::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
    public function insert() {
        $sql = "INSERT INTO $this->tabela (idusuario, nomeusuario, login, senha,cargo,sexo) VALUES ( :idusuario, :nomeusuario, :login, :senha, :cargo,:sexo)";
        $stm = DB_Usuario::prepare($sql);
        $stm->bindParam(':idusuario', $this->idusuario);
        $stm->bindParam(':nomeusuario', $this->nomeusuario);
        $stm->bindParam(':login', $this->login);
        $stm->bindParam(':senha', $this->senha);
        $stm->bindParam(':cargo', $this->cargo);
        $stm->bindParam(':sexo', $this->sexo);
        return $stm->execute();
    }
    
    //update de itens
    public function update($idusuario) {
        $sql = "UPDATE $this->tabela SET  idusuario = :idusuario, nomeusuario = :nomeusuario, login = :login, senha= :senha, cargo= :cargo, sexo= :sexo   WHERE idusuario = :idusuario";
        $stm = DB_Usuario::prepare($sql);
        $stm->bindParam(':idusuario', $idusuario, PDO::PARAM_INT);
        $stm->bindParam(':nomeusuario', $this->nomeusuario);
        $stm->bindParam(':login', $this->login);
        $stm->bindParam(':senha', $this->senha);
        $stm->bindParam(':cargo', $this->cargo);
        $stm->bindParam(':sexo', $this->sexo);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($idusuario) {
        $sql = "DELETE FROM $this->tabela WHERE idusuario = :idusuario";
        $stm = DB_Usuario::prepare($sql);
        $stm->bindParam(':idusuario', $idusuario, PDO::PARAM_INT);
        return $stm->execute();
    }

//função para validar usuarios 

    //função para validar usuarios 

    public function logar(){
        //enviado os dados via post
       $sql = "SELECT usuario, senha FROM usuario WHERE usuario = :usuario and senha = :senha";
       $stm=DB_Usuario::prepare($sql);
       $stm->bindParam(':usuario',$this->usuario);
       $stm->bindParam(':senha',$this->senha);

       if ($stm->execute()) {
        //se existir linha maior que zero
       if ($stm->rowcount()>0) {
           // criou um nova variavel
        $dado = $stm->fetchAll();
        header("Location:views/vendedor.php");
        }else{
            return false;

        }
       }
    }
    
    
}
?>