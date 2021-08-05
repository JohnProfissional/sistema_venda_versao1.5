<?php

    include 'Config_itensDevolucao.php';

class DB_Itens_Devolucao_Cliente {
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
               self::$instance = new PDO('pgsql:host=' . HOST_Itens_Devolucao_Cliente . ';dbname=' . BASE_Itens_Devolucao_Cliente, USER_Itens_Devolucao_Cliente, PASSWORD_Itens_Devolucao_Cliente);
               self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
           
            
        } catch (PDFException $e) {
             echo "erro gerado" . $e->getMessage();
         }
     }
        return self::$instance;
    
    }
    public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }
}


?>