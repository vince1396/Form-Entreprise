<?php
session_start();
include("_gestion.Tholdi.inc.php");

if (isset($_SESSION["login"])) {
    $connecte = true;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tholdi</title>
        <meta charset="utf-8">
        <meta name="author" content="pixelhint.com">
        <meta name="description" content="Crafty is a stunning HTML5/CSS3 multi-purpose template, well-coded, commented code and easy to customize"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/main_responsive.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/carouFredSel.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>

        <header>
            <div class="wrapper">
                <img src="img/logo.png" alt="Crafty" class="logo">
                <a href="#" class="menu_icon" id="menu_icon"></a>
                <nav id="nav_menu">
                    <ul>
                        <?php if ($connecte == true): ?>                         
                            <li>
                                <a>  Bienvenue <?php echo $_SESSION['login']; ?> </a>
                            </li>
                        <?php endif; ?>
                        <li><a href="./accueil.php">Accueil</a></li>
                        <li><a href="./présentation.php">Présentation</a></li>
                        <li>
                            <a href="nosProduits.php">Nos Produits</a>
                        </li>
                        <?php if ($connecte == true): ?>
                            <li>
                                <a href="panier.php">Panier</a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="espaceClient.php">Espace client</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                        <?php if ($connecte == true): ?>
                            <li> 
                                <input type="button" class="btn btn-primary btn-sm" value="Se déconnecter" onclick="location.href = 'deconnexion.php'">
                            </li>                           
                        <?php endif; ?>



                    </ul>
                </nav>


            </div>
        </header><!--  End Header  -->