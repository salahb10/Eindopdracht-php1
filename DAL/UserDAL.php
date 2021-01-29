<<?php
require_once dirname(__FILE__) . '/../Model/User.php';
include 'DbConnection.php';

    class UserDAL
    {
      // we begin with the connecion of the // db
      function __construct()
      {
          $this->instance = DbConnection::getInstance();
          $this->connection = $this->instance->getConnection();
      }
      function GetAllUsers()
      {
        $sql = "SELECT * FROM users";
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $UserID = $row["userID"];
                $Email = $row["email"];
                $Password = $row['password'];
                $FirstName = $row['firstName'];
                $LastName = $row['lastName'];
                $IsAdmin = $row['isAdmin'];

                $user = new User($UserID, $Email, $Password, $FirstName, $LastName, $IsAdmin);
                $users[] = $user;
            }
            return $users;
        } else {
            echo 'no users found';
        }
      }
      //Resets password of an email and uses escape string to prevent sql injection
        public function UserPasswordReset($Email)
        {
            $NewPassword = $this->generateRandomString(10);
            $Email = mysqli_real_escape_string($this->connection, $Email);
            $sql = "UPDATE users SET password = '$NewPassword' where email like '$Email'";
            $this->sendNewPasswordToEmail($NewPassword, $Email);
            return mysqli_query($this->connection, $sql);
        }

      //generates new password
        function generateRandomString($length = 10)
        {
          $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charactersLength = strlen($characters);
          $randomString = '';
          for ($i = 0; $i < $length; $i++) {
              $randomString .= $characters[rand(0, $charactersLength - 1)];
          }
          return $randomString;
        }

      //Sends new generated/made password to email address
        function sendNewPasswordToEmail($NewPassword, $Email)
        {
          // subject of the email
          $subject = "New password";
          // message of the email
          $content = "Your new password is " . $NewPassword;
          // send the email
          mail($Email, $subject, $content);
        }

         public function GetUserByEmail($Email)
        {
          $stmt = $this->connection->prepare("SELECT * FROM users WHERE email = ?");
          $stmt->bind_param("s", $Email);
          try {
              $stmt->execute();
              $user = $stmt->get_result();
              return $user->fetch_object();
           } catch (PDOException $e) {
              return null;
           }
        }
      public function SearchUserByEmail($Email)
      {
          $Email = mysqli_real_escape_string($this->connection, $Email);
          $sql = "SELECT userID, firstName, lastName, email, password, isAdmin FROM users WHERE email like '$Email'";
  
          $users = [];
          $result = mysqli_query($this->connection, $sql);
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result))  {
                   $UserID =  $row["userID"];
                   $Email =  $row["email"];
                   $Password =  $row['password'];
                   $FirstName =  $row['firstName'];
                   $LastName =  $row['lastName'];
                   $IsAdmin =  $row['isAdmin'];
                   $user =  new User( $UserID,$FirstName,$LastName,$Email, $Password,$IsAdmin);
                   $users[] = $user;
              }
              return $users;
          }
      }



    }


 ?>
