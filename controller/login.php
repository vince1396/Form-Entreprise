<?php
    require "model/loginModel.php";

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $mdp = sha1($_POST['mdp']);
        
        $req = login($email, $mdp);
        $message = "";
        $i = 0;
        
        if($reponse = $req->fetch())
        {
            $_SESSION['connecte'] = true;
            $_SESSION['id'] = $reponse['id_u'];
            $_SESSION['email'] = $reponse['email'];
            $_SESSION['lvl'] = $reponse['lvl']; 
            
            header("location:".BASE_URL."/accueil");
        }
        else
        {
            $i++;
            $message = "Mauvais identifiants";
        }
        
    }
    
    require "view/loginView.php";