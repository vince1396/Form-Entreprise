<?php
require "model/adminCreateUser.php";
 if(isset($_POST['submit']))
 {
     $nom     = htmlentities($_POST['nom']);
     $prenom  = htmlentities($_POST['prenom']);
     $email   = htmlentities($_POST['email']);
     $mdp     = htmlentities($_POST['mdp']);
     $confirm = htmlentities($_POST['confirm']);
     $role    = htmlentities($_POST['role']);
     $chef    = htmlentities($_POST['chef']);

     createUser($nom, $prenom, $email, $mdp, $confirm, $role, $chef);
     $message = "L'insertion a bien été effectuée";
 }

require "view/adminCreateUser.php";
?>