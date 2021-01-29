<?php
require_once '../Logic/FireplaceLogic.php';
?>
<!DOCTYPE HTML>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <meta name="description" content="Webshop">
    <meta name="keywords" content="webshop, sfeerhaarden">
    <link href="images/logo.jpg" rel="shortcut icon" type="image/x-icon" />
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <link href="css/Products.css" rel="stylesheet" type="text/css">
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
    <a class="active" href="Products.php">Products</a>
    <a href="Register.php">Register</a>
    <a href="Login.php">Login</a>

</section>

<section class="MainContent">
<section class="products"></section>
    <h1 id="ProductsTitle">Products</h1>
   <?php
   
        $fireplaces = [];
        $FireplaceLogic = new FireplaceLogic();

        $fireplaces= (array)$FireplaceLogic->GetAllFireplaces();
        ?>
        <?php>
        foreach ($fireplaces as $fireplace) {
        ?>
    <label class="ProductDetails ">Model:<?php echo $fireplace->getModel() ?></label>
                    <br>
                    <label class="HeightLabel">Height:<?php echo $fireplace->getModel() ?></label>
                    <br>
                    <label class="WidthLabel">Width:<?php echo $fireplace->getWidth()?></label>
                    <br>
                    <label class="Img">:<?php echo $fireplace->getImage() ?></label>
                    <br>
                    <label class="priceLabel">Price:€<?php echo number_format((float)$fireplace->getPrice(), 2, ',', ''); ?></label>

  
    </section>
</section>
    


</body>
</html>