<?php
    function displayCommercial(){
        global $bdd;
        
        $req = $bdd->prepare("SELECT nom, prenom FROM user WHERE id_u =".$id_u);
        $req->execute();
        
        return $req->fetch();
    }

    