<?php
namespace App\Common;
    use PDO;

class PDOsingleton{
        private PDO $pdo;
        private static PDOsingleton $instance;

        private function __construct(){
            $this -> pdo = new PDO("mysql:host=db;dbname=tp;charset=utf8mb4", "root", "root" );
        }

        public static function get() : PDO
        {
            if(!isset(self::$instance)) {
                self::$instance = new PDOsingleton();
            }
                return self::$instance->pdo;
        }
    }
