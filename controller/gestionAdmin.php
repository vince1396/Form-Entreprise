<?php
    require "model/gestionAdminModel.php";

//    if($_SESSION['lvl'] == 3)
//    {
        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $estChef = $_POST['estChef'];
            
            addUser($nom, $prenom, $email, $mdp, $estChef);
        }
//    }
//    else
//        header("location: index.php");
    require "view/gestionAdminView.php";