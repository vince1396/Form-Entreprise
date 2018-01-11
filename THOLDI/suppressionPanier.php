<?php

session_start();

unset($_SESSION["panier"][$typeContainer]);
header("Location:panier.php");

