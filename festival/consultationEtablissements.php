<?php
include_once '_debut.inc.php';
include_once '_gestionBase.inc.php';
?>

<!-- Une div contenant la class "container" préfixe obligatoirement les lignes (div de class=row) -->
<div class="container">
    <!-- ligne principale -->
    <div class="row "> 
        <!-- première colonne (s'étend sur de 3 colonnes sur 12 possibles) -->
        <div class="col-md-3 border">
            <br />
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

        <!-- deuxième colonne (s'étend sur 7 colonnes sur 12 possibles à partir de la 3) -->
        <div class="col-md-7 border">
            <br />
            <!-- une ligne dans une colonne -->
            <div class="row">

                    <div class="col-md-6">
                        <?php 
                        $collectionEtablissements = listeEtablissements();
                        foreach ($collectionEtablissements as $etablissements):
                        ?>
                            <article class="panel panel-default articleEtablissement bgColorTheme">
                                    <p> Nom : <?php echo $etablissements["nom"]?>  </p>
                                    <p> Adresse : <?php echo $etablissements["adresseRue"]?>  </p>
                                <p> Code Postal : <?php echo $etablissements["codePostal"]?>  </p>
                                <p> Ville : <?php echo $etablissements["ville"]?>  </p>
                                <ol class="breadcrumb">
                                    <li> 
                                        <a href="modificationEtablissement.php?numEtablissement=">modifier
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="detailEtablissement.php?numEtablissement=">Détail
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="suppressionEtablissement.php?numEtablissement=">Suppression
                                        </a>
                                    </li>
                                </ol>
                            </article> 
                        <?php endforeach; ?>
                    </div>
                
            </div>
        </div>
    </div>
    <hr>

    <footer>
        <p>&copy; Jules Ferry 2015</p>
    </footer>
</div> <!-- /container -->




<?php include("_fin.inc.php"); ?>
