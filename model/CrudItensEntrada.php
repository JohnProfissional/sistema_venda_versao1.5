<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include_once'../../controller/conexao/conexao_ItensEntrada/DB_ItensEntrada.php';   //inclui arquivo DB

 abstract class CrudItensEntrada extends DB_ItensEntrada {   //faz herança do arquivo DB
    
    protected $tabela;
   
    public $identrada;
    public $idproduto;
    public $precocompra;
    public $quantidade;
    public $unidade;
    public $ipi;
    public $frete;
    public $icms;


    public function setIdentrada($identrada) 
    {
        $this->identrada = $identrada;
    }

    public function getIdentrada() 
    {
        return $this->identrada;
    }
    
    public function setIdproduto($idproduto) 
    {
        $this->idproduto = $idproduto;
    }

    public function getIdproduto() 
    {
        return $this->idproduto;
    }

    public function setPrecocompra($precocompra) 
    {
        $this->precocompra = $precocompra;
    }

    public function getPrecocompra() 
    {
        return $this->precocompra;
    }

    public function setQuantidadeitensentrada($quantidade) 
    {
        $this->quantidade = $quantidade;
    }

    public function getQuantidadeitensentrada() 
    {
        return $this->quantidade;
    }

    public function setUnidade($unidade) 
    {
        $this->unidade = $unidade;
    }

    public function getUnidade() 
    {
        return $this->unidade;
    }

    public function setIpi($ipi) 
    {
        $this->ipi = $ipi;
    }

    public function getIpi() 
    {
        return $this->ipi;
    }

    public function setFrete_itensentrada($frete) 
    {
        $this->frete = $frete;
    }

    public function getFrete_itensentrada() 
    {
        return $this->frete;
    }

    public function setIcms($icms) 
    {
        $this->icms = $icms;
    }

    public function getIcms() 
    {
        return $this->icms;
    }
}

