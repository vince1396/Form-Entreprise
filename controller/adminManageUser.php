<?php
  require "model/adminManageUser.php";

    $number = 1;
    $getUsers = getUsers();
// =============================================================================
    if(isset($_POST['search']))
    {
        $rechercher = $_POST['rechercher'];
        $number = 1;
        $req = searchUser($rechercher);
    }
// =============================================================================
    if(isset($_GET['supp']) && !empty($_GET['supp']))
    {
        $id_u = (int)$_GET['supp'];
        ban($id_u);
        header("Location:index.php?p=adminManageUser");
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
    if(isset($_GET['deban']))
    {
        $id_u = $_POST('deban');
        $message = deban($id_u);
    }
// =============================================================================
    if(isset($_GET['filter']))
    {
        $getUsers = filter($_GET['filter']);
    }
// =============================================================================
    if(isset($_POST['triRole']))
    {
        if($_POST['role'] == "all")
        {
            $getUsers = getUsers();
        }
        else
        {
            $getUsers = triRole($_POST['role']);
        }
    }

  require "view/adminManageUser.php";