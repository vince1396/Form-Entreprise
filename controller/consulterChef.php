<?php
    require "model/consulterChefModel.php";
    if($_SESSION['lvl'] == 2){
        $id = (int)$_GET['id'];
        $req = displayListClient($id);
        $req2 = displayName($id);
    }else
        header("location:accueil");

    require "view/consulterChefView.php";