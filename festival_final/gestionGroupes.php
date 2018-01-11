<?php
include_once '_debut.inc.php';
$_SESSION["Navigation"] = "Groupe";
?>

<div class="container">
    <div class="row ">
       <?php        include_once 'menuGauche.inc.php';?>
        <div class="col-md-7 ">
            <article>
                <header>
                    <p class="text-uppercase text-center bg-success">
                    Section de gestion des groupes
                    </p>
                </header>
                <p>
                    Cette section vous permettra d'effectuer une gestion des groupes de l'événement.
                </p>
            </article>
        </div>
    </div>
    <hr>


</div> <!-- /container -->



<?php include_once '_fin.inc.php'; ?>