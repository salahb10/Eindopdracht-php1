<?php

class User
{

   public $UserID;
   private $Email;
   private $Password;
   private $FirstName;
   private $LastName;
   private $IsAdmin;

   function __construct($UserID,$Email,$Password,$FirstName,$LastName,$IsAdmin)
   {
        $this->UserID = $UserID;
        $this->Email = $Email;
        $this->Password = $Password;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->IsAdmin = $IsAdmin;

   }

// gegevens van een user ophalen
   function getUserID()
   {
     return $this->UserID;
   }
   function getEmail()
   {
     return $this->Email;
   }
   function getPassword()
   {
     return $this->Password;
   }
   function getFirstName()
   {
     return $this->FirstName;
   }
   function getLastName()
   {
     return $this->LastName;
   }
   function getIsAdmin()
   {
     return $this->IsAdmin;
   }
// informatie van een user aanpassen
   public function setUserID($UserID)
   {
       $this->UserID = $UserID;
   }
   public function setFirstName($FirstName)
   {
       $this->FirstName = $FirstName;
   }
   public function setLastName($LastName)
   {
       $this->LastName = $LastName;
   }
   public function setEmail($Email)
   {
       $this->Email = $Email;
   }
   public function setPassword($Password)
   {
       $this->Password = $Password;
   }
   public function setIsAdmin($IsAdmin)
   {
       return $this->IsAdmin = $IsAdmin;
   }





}



 ?>
