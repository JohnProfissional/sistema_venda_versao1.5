<?php
##salvar como CrudProdutos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";    //inclui arquivo DB

 abstract class CrudParcelas extends DB {   //faz herança do arquivo DB
    
    //Nome da tabela e Atributos
    protected $tabela;
    public $numerosdeparcelas;
    public $idforma_de_pagamento;
    public $idvenda;
        


    public function setNumerosdeparcelas($numerosdeparcelas) {
        $this->numerosdeparcelas = $numerosdeparcelas;
    }
    public function getNumerosdeparcelas() {
        return $this->numerosdeparcelas;
    }
    public function setIdForma_de_pagamento($idforma_de_pagamento) {
        $this->idforma_de_pagamento = $idforma_de_pagamento;
    }
    public function getIdForma_de_pagamento() {
        return $this->idforma_de_pagamento;
    }
    public function setIdVenda($idvenda) {
        $this->idvenda = $idvenda;
    }
    public function getIdVenda() {
        return $this->idvenda;
    }
      
}

?>