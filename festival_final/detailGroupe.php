<?php
include_once '_debut.inc.php';


if (!isset($_REQUEST["numGroupe"])) {
    header("location: consultationGroupe.php");
}

$id = $_REQUEST['numGroupe'];

$groupe = obtenirDetailGroupe($id);

if ($groupe != false) {
    $id = $groupe['id'];
    $nom = $groupe['nom'];
    $identiteResponsable = $groupe['identiteResponsable'];
    $adressePostale = $groupe['adressePostale'];
    $nombresPersonnes = $groupe['nombrePersonnes'];
    $nomPays = $groupe['nomPays'];
    $hebergement = $groupe['hebergement'];
}
?>

<div class="container">
    <div class="row ">
        <?php        include_once 'menuGauche.inc.php';?>

        <div class="col-md-7 ">
            <article>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $id; ?></h3>
                    </div>
                    <div class="panel-body">
                        <p> <?php echo $nom; ?> </p>
                        <p> <?php echo $identiteResponsable; ?> </p>
                        <p> <?php echo $adressePostale; ?> </p>
                        <p>
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                               <?php echo $nombresPersonnes; ?>
                        </p>
                        <address><?php echo $nomPays; ?></address>
                        <p>
                            <?php if ($hebergement == 1): ?>
                                    Hebergement 
                                <?php else: ?>
                                    Aucun hebergement
                                <?php endif; ?>
                        </p>
                    </div>
                </div> 
            </article>
        </div>
    </div>
    <hr>


</div> <!-- /container -->







<?php include("_fin.inc.php"); ?>