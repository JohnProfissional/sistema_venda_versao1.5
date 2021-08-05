<?php
##salvar como CrudProdutos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
include "../controller/class/DB.php";    //inclui arquivo DB

 abstract class CrudFormapagamento extends DB {   //faz herança do arquivo DB
    
    //Nome da tabela e Atributos
    protected $tabela;
    public $idforma_de_pagamento;
    public $tipo_pagamento;
        

public function setIdforma_de_pagamento($idforma_de_pagamento) {
        $this->idforma_de_pagamento = $idforma_de_pagamento;
    }
    public function getIdforma_de_pagamento() {
        return $this->idforma_de_pagamento;
    }
    public function setTipo_pagamento($tipo_pagamento) {
        $this->tipo_pagamento = $tipo_pagamento;
    }
    public function getTipo_pagamento() {
        return $this->tipo_pagamento;
    }
    
}

?>