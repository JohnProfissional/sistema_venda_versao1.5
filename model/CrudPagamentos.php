<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";     //inclui arquivo DB

 abstract class CrudPagamentos extends DB {   //faz herança do arquivo DB
    
    //Nome da tabela e Atributos
    protected $tabela;
    public $idpagamento;
    public $idparcelas;
    public $idforma_de_pagamento;
    public $valor_pagamento;
    public $data_pagamento;
    public $numerosdeparcelas;
   
    //Funções
    public function setIdpagamento($idpagamento) {
        $this->idpagamento  = $idpagamento;
    }
    public function getIdpagamento() {
        return $this->idpagamento;
    }   
    public function setIdparcelas($idparcelas) {
        $this->idparcelas  = $idparcelas;
    }
    public function getIdparcelas() {
        return $this->idparcelas;
    }    
    
    public function setIdforma_de_pagamento($idforma_de_pagamento) {
        $this->idforma_de_pagamento = $idforma_de_pagamento;
    }
    public function getIdforma_de_pagamento() {
        return $this->idforma_de_pagamento;
    }

    public function setValor_pagamento($valor_pagamento) {
        $this->valor_pagamento = $valor_pagamento;
    }
    public function getValor_pagamento() {
        return $this->valor_pagamento;
    }

    public function setData_pagamento($data_pagamento) {
        $this->data_pagamento = $data_pagamento;
    }
    public function getData_pagamento() {
        return $this->data_pagamento;
    }

    public function setNumerosdeparcelas($numerosdeparcelas) {
        $this->numerosdeparcelas = $numerosdeparcelas;
    }
    public function getNumerosdeparcelas() {
        return $this->numerosdeparcelas;
    }
}

?>