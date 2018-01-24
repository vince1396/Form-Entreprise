<?php

    function displayCommerciaux(){
        
        global $bdd;
        
        $req = $bdd->prepare("SELECT * FROM user WHERE id_chef =".$_SESSION['id']." AND lvl = 1");
        $req->execute();
        return $req->fetchAll();
    }