<?php
include_once '_debut.inc.php';
?>

<!-- Une div contenant la class "container" préfixe obligatoirement les lignes (div de class=row) -->
<div class="container">
    <!-- ligne principale -->
    <div class="row "> 
       <?php        include_once 'menuGauche.inc.php';?>

        <!-- deuxième colonne (s'étend sur 7 colonnes sur 12 possibles à partir de la 3) -->
        <div class="col-md-7 ">
            <br />
            <!-- une ligne dans une colonne -->
            <div class="row">
                <?php
                $listeGroupe = listeGroupe();
                if ($listeGroupe != false):
                    foreach ($listeGroupe as $groupe):
                        ?>  
                        <div class="col-md-6">
                            <article class="panel panel-default articleEtablissement bgColorTheme">
                                <p> Nom : <?php echo $groupe["nom"] ?>  </p>
                                <p> Identite Responsable : <?php echo $groupe["identiteResponsable"] ?> </p>
                                <p> Code Postale : <?php echo $groupe["adressePostale"] ?> </p>
                                <p> Nombre Personnes : <?php echo $groupe["nombrePersonnes"] ?> </p>
                                <ol class="breadcrumb">
                                    <li> 
                                        <a href="modificationGroupe.php?numGroupe=<?php echo $groupe["id"] ?>">modifier
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="detailGroupe.php?numGroupe=<?php echo $groupe["id"] ?>">Détail
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="suppressionGroupe.php?numGroupe=<?php echo $groupe["id"] ?>">Suppression
                                        </a>
                                    </li>
                                </ol>
                            </article>
                        </div>

                    <?php endforeach; ?>                
                <?php endif; ?> 



            </div>
        </div>
    </div>



</div> <!-- /container -->




<?php include("_fin.inc.php"); ?>
