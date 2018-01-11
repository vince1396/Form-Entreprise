<?php
include_once '_debut.inc.php';
include_once '_gestionBase.inc.php';

if(!isset($_REQUEST["numEtablissement"]))
{
    header("location:consultationEtablissements.php");
}

$id=$_REQUEST['numEtablissement'];
$etablissements=  obtenirDetailEtablissement($id);

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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> </h3>
                    </div>
                    <div class="panel-body">
                        <p>   </p>
                        <p>   </p>
                        <p>
                            <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                
                        </p>
                        <address> </address>
                        <p>
                            
                                    Etablissement scolaire 
                                 
                                    Autre établissement
                               
                        </p>
                        <p>
                              
                        </p>
                        <p>   chambre(s)proposées </p>
                    </div>
                </div> 
            </article>
        </div>
    </div>
    <hr>

    <footer>
        <p>&copy; Company 2014</p>
    </footer>
</div> <!-- /container -->







<?php include("_fin.inc.php"); ?>