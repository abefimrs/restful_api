<?php
 
/**
 * Handling database connection
 *
 * @author Ravi Tamada
 */
class DbConnect {
 
    private $conn;
 
    function __construct() {        
    }
 
    /**
     * Establishing database connection
     * @return database connection handler
     */
    function connect() {
        include_once dirname(__FILE__) . '/Config.php';
 
        // Connecting to mysql database
        //$this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        /*
        $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
 
        // Check for database connection error
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        */

        //Open a new connection to the MySQL server
        $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        //Output any connection error
        if ($mysqli->connect_error) {
            die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }
 
        // returing connection resource
        //return $this->conn;
        return $mysqli;
    }
 
}
 
?>