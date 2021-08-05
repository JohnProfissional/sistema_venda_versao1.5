<?php

    include 'Config_Pagamentos.php';

class DB_Pagamentos {
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
               self::$instance = new PDO('pgsql:host=' . HOST_Pagamentos . ';dbname=' . BASE_Pagamentos, USER_Pagamentos, PASSWORD_Pagamentos);
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