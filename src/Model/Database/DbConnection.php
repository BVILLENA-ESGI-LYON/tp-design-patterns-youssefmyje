<?php

namespace EsgiIw\TpDesignPattern\Model\Database;

class DbConnection
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        // Here you might initiate your database connection
        // Example: $this->connection = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');
        echo "Connexion à la base de données établie.\n";
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DbConnection();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
