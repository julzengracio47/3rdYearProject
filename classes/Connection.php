<?php
class Connection {
    
    private static $connect = NULL;
    
    public static function getInstance() {
        if (Connection::$connect === NULL) {
            // connect to the database
            $host = "localhost";
            $database = "year3project";
            $username = "root";
            $password = "";

            $dsn = "mysql:host=" . $host . ";dbname=" . $database;
            Connection::$connect = new PDO($dsn, $username, $password);
            if (!Connection::$connect) {
                die("Could not connect to database");
            }
        }
        
        return Connection::$connect;
    }
}
