<?php

    include 'Config_Marcas.php';

class DB_ItensVenda {
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
               self::$instance = new PDO('pgsql:host=' . HOST_Marcas . ';dbname=' . BASE_Marcas, USER_Marcas, PASSWORD_Marcas);
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