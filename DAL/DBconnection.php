<?php
define ('DB_HOST', '638362.infhaarlem.nl');
define ('DB_USER', 's638362');
define ('DB_PASSWORD', 'Welkom023');
define ('DB_DB', 's638362_db');


  class DBconnection {
      private $connection;
      private static $instance;


      public static function getInstance() {
         if(!self::$instance) {
            self::$instance = new Dbconnection();
         }
           return self::$instance;
    }

    // Constructor
    private function __construct() {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)
        or die ("<br/>Could not connect to MySQL server");

        mysqli_select_db($this->connection, DB_DB)
        or die ("<br/>Could not select the indicated database");
    }

    //Get mySqli connection
    public function getConnection() {
        return $this->connection;
    }

}
?>
