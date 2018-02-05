<?php
  require "model/adminManageUser.php";

    $number = 1;
// =============================================================================
    if(isset($_POST['search'])) {
        $rechercher = $_POST['rechercher'];
        $number = 1;
        $req = searchUser($rechercher);

    }
// =============================================================================
    if(isset($_GET['supp']) && !empty($_GET['supp']))
    {
        $id_u = (int)$_GET['supp'];
        ban($id_u);
    }
// =============================================================================
    if(isset($_POST['update']))
    {
        if(isset($_POST['mdp']) && !empty($_POST['mdp'])) {

            $id_u = $_POST['id_u'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $mdp = sha1($_POST['mdp']);

            updateUser($id_u, $nom, $prenom, $email, $mdp);
        }else{
            $id_u = $_POST['id_u'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            updateUser2($id_u, $nom, $prenom, $email);
        }
    }
// =============================================================================

  require "view/adminManageUser.php";