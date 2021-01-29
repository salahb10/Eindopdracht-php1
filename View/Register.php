<?php
?>
<!DOCTYPE HTML>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="description" content="Webshop">
    <meta name="keywords" content="webshop, sfeerhaarden">
    <link href="images/logo.jpg" rel="shortcut icon" type="image/x-icon" />
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <link href="css/Register.css" rel="stylesheet" type="text/css">
</head>
<body>


<section class="Banner">
    <section class="leftBanner">
        <img class="logoImage" src="images/logo.jpg">
        <h1 class="Title">Luxury Flames</h1>
    </section>
    <section class="rightBanner">
        <h1 class="Date">De beste van Nederland</h1>
    </section>
</section>
<section class="NavigationBar">
    <a href="Homepage.php">Home</a>
    <a href="Products.php">Products</a>
    <a class="active" href="Register.php">Register</a>
    <a href="Login.php">Login</a>

</section>

<section class="MainRegister" id= "mainregister">
    <header class="titleHeaders">
        <h1>Registration form</h1></header>

    <section class="register-container">
        <form id = "registerForm" method="post">
            <label>First Name</label>
            <input type="text" placeholder="e.g John" name = "registerFirstName">
            <br>
            <label>Last Name</label>
            <input type="text" placeholder="e.g Smith" name = "registerLastName">
            <br>
            <label>Email</label>
            <input type="email" placeholder="e.g Johnsmith@gmail.com" name="registerEmail">
            <br>
            <label>Password</label>
            <input type="password"  name="registerPassword">
            <br>
            <button type="submit" name="register" form="registerForm" value="Submit">Register</button>
        </form>
    </section>



</body>





</html>