<?php

    require "model/historiqueModel.php";
    $r = displayListClient();
    $message = '';
    if(isset($_POST['submit'])){
        
        $rechercher = $_POST['rechercher'];
        $req = searchTest($rechercher);
//        var_dump($req);
//        die();
        
        if(empty($_POST['interet'])){
            
        }else{
            $interet = $_POST['interet'];
            $req2 = searchInteret($interet);
        }
        
        if(empty($_POST['cInteret'])){
            
        }else if($_POST['cInteret'] == 1)
        {
            $cInteret = $_POST['cInteret'];
            $req3 = searchBureautique();
            foreach($req3 as $k=>$v){
                $message = $v['nom_c'];
            }
            
        }else if($_POST['cInteret'] == 2){
            $cInteret = $_POST['cInteret'];
            $req4 = searchInformatique();
            foreach($req4 as $k=>$v){
                $message = $v['nom_c'];
                $message = $v['nom_c'];
                $message = $v['nom_c'];
            }
            
        }else if($_POST['cInteret'] == 3){
            $cInteret = $_POST['cInteret'];
            $req5 = searchSolution();
            foreach($req5 as $k=>$v){
                $message = $v['nom_c'];
            }
        }else if($_POST['cInteret'] == 4){
            $cInteret = $_POST['cInteret'];
            $req6 = searchTelephonie();
            foreach($req6 as $k=>$v){
                $message = $v['nom_c'];
            }
        }
        
        
        
    }

    require "view/historiqueView.php";

?>