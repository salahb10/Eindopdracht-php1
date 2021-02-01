<?php
require_once dirname(__FILE__) . '/../Model/Fireplace.php';
include 'DbConnection.php';

class FireplaceDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }


    //Gets ticket info from db and puts values into array
    function GetAllFireplaces()
    {
        $sql = "SELECT * from fireplaces";

        $Fireplaces = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $FireplaceID = $row["fireplaceID"];
                $Model = $row['model'];
                $Height = $row['height'];
                $Width = $row["width"];
                $Price = $row['price'];
                $Image = $row['image'];

                $Fireplace = new Fireplace($FireplaceID, $Model, $Height,$Width, $Price, $Image);
                $Fireplaces[] = $Fireplace;
            }
            return $Fireplaces;
        } else {
            echo 'no fireplaces found';
        }
    }
}
?>