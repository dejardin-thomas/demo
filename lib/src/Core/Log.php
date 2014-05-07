<?php

namespace Core;

use Exception;

class Log {

    use \Psr\Log\LoggerTrait;
    /**
     *
     * @var Log
     */
    private static $_instance;
    
    private static $_file;

    private function __construct() {
        ;
    }
    
    public function __clone(){  
       throw new Exception('Cet objet ne peut pas être cloné');  
   }  

    /**
     * Récupère l'instance de la classe
     *
     * @return Log
     */
    public static function getInstance() {
        if (is_null(static::$_instance)) {
            static::$_instance = new static();
            static::$_file = fopen(__DIR__.'/../../../var/log/system.log', 'a+');
        }

        return static::$_instance;
    }

    public function log($level, $message, array $context = array()) {
        fputs(static::$_file, $level.' : '.$message.PHP_EOL); // On écrit le nouveau nombre de pages vues
    }
    
    public function __destruct() {
        fclose(static::$_file);
    }

}
