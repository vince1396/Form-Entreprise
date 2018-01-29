<?php

    require "model/gestionChefModel.php";
    
    if($_SESSION['lvl'] == 2){
        
        $req = displayCommerciaux();
    }
    else
        header("location:accueil");

    require "view/gestionChefView.php";