<!DOCTYPE HTML>
<hmtl lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Webshop">
    <meta name="keywords" content="webshop, sfeerhaarden">
    <link href="images/logo.jpg" rel="shortcut icon" type="image/x-icon" />
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <link href="css/Login.css" rel="stylesheet" type="text/css">
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
    <a href="Register.php">Register</a>
    <a class="active" href="Login.php">Login</a>

</section>

<section class="login-container">
    <form id="loginSection" method="post">
    <label id="Email">  E-mail:</label>
    <input id="inputEmail"type="email" placeholder="test@test.com" name="loginEmail">
    <br>
    <label id="Password">Password:</label>
    <input id="inputPassword"type="password"  placeholder="*********" name="loginPassword">
    <br>
    <button id="LoginBtn" type="submit" name="login" form="loginForm" value="Submit">Login</button>
    <a href="ForgotPassword.php" id="ForgotPassword">Forgot Password?</a>
    </form>
    </section>
</section>



</body>





</hmtl>