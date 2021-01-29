<<?php
require_once dirname(__FILE__) . '/../DAL/UserDAL.php';

    class UserLogic
    {

         private $UserDAL;

    function __construct()
    {
    $this->UserDAL = new UserDAL();

    }
    function GetAllUsers()
    {
      return $this->UserDAL->GetAllUsers();
    }
    function UserPasswordReset($Email)
    {
      return $this->UserDAL->UserPasswordReset($Email);
    }
    function GetUserByEmail($email)
    {
        return $this->userDAL->GetUserByEmail($email);
    }
    function SearchUserByEmail($email)
    {
        return $this->userDAL->SearchUserByEmail($email);
    }
    





}





 ?>
