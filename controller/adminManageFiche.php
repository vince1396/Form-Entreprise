<?php
if(!isset($_SESSION['lvl']) OR $_SESSION['lvl'] != 3)
{
    header("Location:index.php?p=login");
}
else {
    require "model/adminManageFiche.php";


    require "view/adminManageFiche.php";
}