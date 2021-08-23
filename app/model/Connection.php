<?php

    namespace App\Model;

    class Connection {

        private static $instance;

        public static function getConn() {
            if(!isset(self::$instance)):
                self::$instance = new \PDO('mysql:host=localhost; dbname=pokemon-team; charset=utf8', 'root', '');
            endif;    
            
            return self::$instance;
        }
    }

?>