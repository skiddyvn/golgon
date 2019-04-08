<?php
class Database {
    private static $conn;
    public static function getConnection() {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'golgon';
        
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        self::$conn = new mysqli($servername,$username,$password,$dbname);
        
        if (self::$conn->connect_error) {
            require('404.php');
        }
        return self::$conn;
    }
   
}