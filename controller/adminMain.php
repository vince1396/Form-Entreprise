<?php

    if($_SESSION['lvl'] == 3)
        require "view/adminMainView.php";
    else
        header('location:accueil');
