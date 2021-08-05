<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";    //inclui arquivo DB

 abstract class CrudDevolucao extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $idvenda;
    public $quantidadedevolvida;
    public $datadevolucao;
    public $descricaodadevolucao;
    


    public function setIdvenda($idvenda) 
    {
        $this->idvenda = $idvenda;
    }

    public function getIdvenda() 
    {
        return $this->idvenda;
    }


    public function setQuantidadedevolvida($quantidadedevolvida) 
    {
        $this->quantidadedevolvida = $quantidadedevolvida;
    }

    public function getQuantidadedevolvida() 
    {
        return $this->quantidadedevolvida;
    }

    public function setDatadevolucao($datadevolucao) 
    {
        $this->datadevolucao = $datadevolucao;
    }

    public function getDatadevolucao()
    {
        return $this->datadevolucao;
    }

    public function setDescricaodadevolucao($descricaodadevolucao) 
    {
        $this->descricaodadevolucao = $descricaodadevolucao;
    }

    public function getDescricaodadevolucao() 
    {
        return $this->descricaodadevolucao;
    }
    
}

