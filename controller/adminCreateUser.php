<?php
if(!isset($_SESSION['lvl']) OR $_SESSION['lvl'] != 3)
{
    header("Location:index.php?p=login");
}
else {
    require "model/adminCreateUser.php";

    if (isset($_POST['submit'])) {
        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);
        $email = htmlentities($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $confirm = sha1($_POST['confirm']);
        $role = htmlentities($_POST['role']);
        $chef = htmlentities($_POST['chef']);

        $message = createUser($nom, $prenom, $email, $mdp, $confirm, $role, $chef);
    }

    require "view/adminCreateUser.php";
}