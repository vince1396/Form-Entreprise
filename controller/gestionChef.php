<?php

    require "model/gestionChefModel.php";
    
    if($_SESSION['lvl'] == 3){
        
        $req = displayCommerciaux();
    }
    else
        header("location:accueil");

    require "view/gestionChefView.php";