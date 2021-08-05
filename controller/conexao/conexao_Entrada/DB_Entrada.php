<?php

    include 'Config_Entrada.php';

class DB_Entrada {
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
               self::$instance = new PDO('pgsql:host=' . HOST_Entrada . ';dbname=' . BASE_Entrada, USER_Entrada, PASSWORD_Entrada);
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

    /*aqui criou função que sera usadas no arquivos seguintes com tabelas que precise retornar o ultimo id*/
    public static function lastInsertId(){
        return self::getInstance()->lastInsertId();
    }
}


?>