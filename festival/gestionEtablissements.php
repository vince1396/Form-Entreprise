<?php
include_once '_debut.inc.php';
include_once '_gestionBase.inc.php';
?>

<div class="container">
    <div class="row ">
        <div class="col-md-3 border">
            <div id="menuGauche" class="btn-group-vertical btn-block">

                <a href="consultationEtablissements.php" class="btn btn-primary ">
                    CONSULTER</a>
                <a href="creationEtablissement.php" class="btn btn-primary  ">
                    AJOUTER</a>

                <a href="#" class="btn btn-primary btn-block">
                    RECHERCHER</a>
            </div> 
            <img src="img/clefmusique.gif" class="img-responsive" alt="Responsive image">
        </div>
        <div class="col-md-7 border">
            <article>
                <header>
                    <p class="text-uppercase text-center bg-success">
                    Section de gestion de établissements
                    </p>
                </header>
                <p>
                    Cette section vous permettra d'effectuer une gestion des établissements de l'événement.
                </p>
            </article>
        </div>
    </div>
    <hr>

    <footer>
        <p>&copy; Company 2014</p>
    </footer>
</div> <!-- /container -->



<?php include_once '_fin.inc.php'; ?>