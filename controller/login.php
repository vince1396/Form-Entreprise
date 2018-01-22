<?php
    require "model/loginModel.php";
    
    if(isset($_SESSION['connecte']) AND isset($_SESSION'id')){
        header("location:".BASE_URL."/accueil");
    }

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
            if(isset($_POST['remember']))
            {
                $key = $reponse['id_u']."-----".sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']);
              
                
                
            }
            
            header("location:".BASE_URL."/accueil");
        }
        else
        {
            $i++;
            $message = "Mauvais identifiants";
        }
        
    }
    if(isset($_COOKIE['Auth']))
    {
        $auth = $_COOKIE['Auth'];
        $auth = explode('-----',$auth);
        $reponse = rememberMe($auth[0]);
        $key = sha1($reponse['email'].$reponse['mdp'].$_SERVER['REMOTE_ADDR']);
       
        
        if($key == $auth[1])
        {
            $_SESSION['connecte'] = true;
            $_SESSION['id'] = $auth[0];
            
            setcookie('Auth', $requete['id_u']."-----".sha1($requete['email'].$requete['mdp'].$_SERVER['REMOTE_ADDR']),time()+(3600*24*3),'/','localhost',false,true);
            header("location:".BASE_URL."/article");
        }
        else
        {
        setcookie('Auth','',time()-3600,'/','localhost',false,true);
            
        }
    }
    
    require "view/loginView.php";