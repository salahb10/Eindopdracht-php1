<?php
require_once dirname(__FILE__).'/../DAL/LoginDAL.php';
require_once dirname(__FILE__).'/../DAL/UserDAL.php';
require_once dirname(__FILE__).'/../Logic/UserLogic.php';


   $loginDal = new LoginDAL();
   $userDal = new UserDAL();
   $userLogic = new UserLogic();
   session_start();

//when clicking on the login button would the system log in
if (isset($_POST['login']))
{
    $user = $userLogic->SearchUserByEmail($_POST['loginEmail']);
    // check if the email and password are correct
    if ($loginDal->UserLogin($_POST['loginEmail'], $_POST['loginPassword']))
    {
        $_SESSION['email'] = $user[0]->getEmail();
        $_SESSION['LoggedIn'] = true;
        header('Location: ../View/Homepage.php');
    }

    else{
        echo "<script>alert('Please try again ! Incorrect email/password.')</script>";
    }
};

//when clicking on the register buton would it be registered
if (isset($_POST['register']))
{

    if($userDal->GetUserByEmail($_POST['registerEmail']) === null) {

        $post = $loginDal->UserRegister($_POST['registerFirstName'], $_POST['registerLastName'], $_POST['registerEmail'], $_POST['registerPassword']);
        header('Location: ../View/RegisterSuccess.php');
    }

    else{
        echo "<script>alert('This email is registered already !')</script>";
    }
};


?>
