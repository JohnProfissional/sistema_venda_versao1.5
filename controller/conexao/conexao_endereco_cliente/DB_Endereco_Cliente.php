<?php

    include 'Config_Endereco_Cliente.php';

class DB {
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
               self::$instance = new PDO('pgsql:host=' . HOST_Endereco_Cliente . ';dbname=' . BASE_Endereco_Cliente, USER_Endereco_Cliente, PASSWORD_Endereco_Cliente);
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