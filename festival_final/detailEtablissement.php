<?php
include_once '_debut.inc.php';


if (!isset($_REQUEST["numEtablissement"])) {
    header("location: consultationEtablissements.php");
}

$id = $_REQUEST['numEtablissement'];

$etablissement = obtenirDetailEtablissement($id);

if ($etablissement != false) {
    $nom = $etablissement['nom'];
    $adresseRue = $etablissement['adresseRue'];
    $adressePostale = $etablissement['codePostal'];
    $ville = $etablissement['ville'];
    $tel = $etablissement['tel'];
    $adresseElectronique = $etablissement['adresseElectronique'];
    $type = $etablissement['type'];
    $civiliteResponsable = $etablissement['civiliteResponsable'];
    $nomResponsable = $etablissement['nomResponsable'];
    $prenomResponsable = $etablissement['prenomResponsable'];
    $nombreChambresOffertes = $etablissement['nombreChambresOffertes'];
}
?>

<div class="container">
    <div class="row ">
        <?php        include_once 'menuGauche.inc.php';?>

        <div class="col-md-7 ">
            <article>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $nom; ?></h3>
                    </div>
                    <div class="panel-body">
                        <p> <?php echo $adresseRue; ?> </p>
                        <p> <?php echo $adressePostale; ?> <?php echo $ville; ?> </p>
                        <p>
                            <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                               <?php echo $tel; ?>
                        </p>
                        <address><?php echo $adresseElectronique; ?></address>
                        <p>
                            <?php if ($type == 1): ?>
                                    Etablissement scolaire 
                                <?php else: ?>
                                    Autre établissement
                                <?php endif; ?>
                        </p>
                        <p>
                             <?php echo $civiliteResponsable . " " . $prenomResponsable . " " . $nomResponsable; ?>
                        </p>
                        <p> <?php echo $nombreChambresOffertes; ?> chambre(s)proposées </p>
                    </div>
                </div> 
            </article>
        </div>
    </div>



</div> <!-- /container -->







<?php include("_fin.inc.php"); ?>