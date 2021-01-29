<?php
define ('DB_HOST', '638362.infhaarlem.nl');
define ('DB_USER', 's638362');
define ('DB_PASSWORD', 'Welkom023');
define ('DB_DB', 's638362_db');

class DbConnection {
    private $connection;
    private static $instance; 

    /*
    Get an instance of the Database
    @return Instance
    */
    
    
    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new DbConnection();
        }
        return self::$instance;
    }

    


    private function __construct() {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)
        or die ("<br/>Could not connect to MySQL server");

        mysqli_select_db($this->connection, DB_DB)
        or die ("<br/>Could not select the indicated database");
    }

    


      public function getConnection() {
        return $this->connection;
      }

    }

?>
