<?php
include 'DbConnection.php';
require_once dirname(__FILE__) . '/UserDAL.php';
class LoginDAL
{
     private $connection;
     private $instance;
     private $userDAL;
     public function __construct()
     {
           $this->instance = DbConnection::getInstance();
           $this->connection = $this->instance->getConnection();
           $this->userDAL = new UserDAL();
     }

    // Login process
    public function UserLogin($Email, $Password)
       {
               //Check email 
               $user = $this->userDAL->GetUserByEmail($Email);
               //Check password
               if ($user->Password === $Password) {
                  return true;}
                 else {
            return false;}
    }
    //Registration process
    public function UserRegister($FirstName, $LastName, $Email, $Password)
    {
        //Prepared statements for registration
        $stmt = $this->connection->prepare("INSERT INTO users  (firstname, lastname, email, password) VALUES(?,?,?,?)");
        $stmt->bind_param("ssss", $FirstName, $LastName, $Email, $Password);
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        } 
    }




}

?>
