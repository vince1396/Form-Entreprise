<?php

    require "model/consulterModel.php";
    $id = (int)$_GET['id'];
//    $centre_interet = (int)$_GET['cInteret'];
    $req1 = lastDisplay();

    $req2 = displayBureautique($id);

    $req3 = displayInformatique($id);
    $req4 = displaySolution($id);
    $req5 = displayTelephonie($id);
    


    require "view/consulterView.php";

?>