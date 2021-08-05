<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";     //inclui arquivo DB

 abstract class CrudItensDevolucao extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $iditensdevolucao;
    public $idproduto;
    public $iddevolucao;
    public $quantidade_devolvida;
    public $datadevolvida;
    
    
    public function setIditensdevolucao($iditensdevolucao) 
    {
        $this->iditensdevolucao = $iditensdevolucao;
    }

    public function getIditensdevolucao() 
    {
        return $this->iditensdevolucao;
    }

     public function setIdproduto($idproduto) 
    {
        $this->idproduto = $idproduto;
    }

    public function getIdproduto() 
    {
        return $this->idproduto;
    }

     public function setIddevolucao($iddevolucao) 
    {
        $this->iddevolucao = $iddevolucao;
    }

    public function getIddevolucao() 
    {
        return $this->iddevolucao;
    }
    

    public function setQuantidade_devolvida($quantidade_devolvida) 
    {
        $this->quantidade_devolvida = $quantidade_devolvida;
    }

    public function getQuantidade_devolvida() 
    {
        return $this->quantidade_devolvida;
    }


    public function setDatadevolvida($datadevolvida) 
    {
        $this->datadevolvida = $datadevolvida;
    }

    public function getDatadevolvida() 
    {
        return $this->datadevolvida;
    }
    
}

