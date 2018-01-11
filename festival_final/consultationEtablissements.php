<?php
include_once '_debut.inc.php';
?>

<!-- Une div contenant la class "container" préfixe obligatoirement les lignes (div de class=row) -->
<div class="container">
    <!-- ligne principale -->
    <div class="row "> 

        <?php include_once 'menuGauche.inc.php'; ?>

        <!-- deuxième colonne (s'étend sur 7 colonnes sur 12 possibles à partir de la 3) -->
        <div class="col-md-7 ">
            <br />
            <!-- une ligne dans une colonne -->
            <div class="row">
                <?php
                $listeEtablissements = listeEtablissements();
                foreach ($listeEtablissements as $etablissement):
                    ?> 

                    <div class="col-md-6">
                        <article class="panel panel-default articleEtablissement bgColorTheme">
                            <p> Nom : <?php echo $etablissement["nom"] ?>  </p>
                            <p> Adresse : <?php echo $etablissement["adresseRue"] ?> </p>
                            <p> Code Postal : <?php echo $etablissement["codePostal"] ?> </p>
                            <p> Ville : <?php echo $etablissement["ville"] ?> </p>
                            <ol class="breadcrumb">
                                <li> 
                                    <a href="modificationEtablissement.php?numEtablissement=<?php echo $etablissement["id"] ?>">modifier
                                    </a>
                                </li>
                                <li> 
                                    <a href="detailEtablissement.php?numEtablissement=<?php echo $etablissement["id"] ?>">Détail
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="suppressionEtablissement.php?numEtablissement=<?php echo $etablissement["id"] ?>">Suppression
                                    </a>
                                </li>
                            </ol>
                        </article>
                    </div>

                <?php endforeach; ?>                




            </div>
        </div>
    </div>



</div> <!-- /container -->




<?php include("_fin.inc.php"); ?>
