<?php
    require "model/consulterChefModel.php";
    if($_SESSION['lvl'] == 2){
        $id = (int)$_GET['id'];
        $req = displayListClient($id);
        $req2 = displayName($id);
        if(isset($_GET['delete'])){
            $id_delete = (int)$_GET['delete'];
            $req_delete = deleteClient($id_delete);
            header('Location: gestionChef');
        }
    }else
        header("location:accueil");

    require "view/consulterChefView.php";