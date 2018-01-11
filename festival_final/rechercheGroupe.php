<?php include_once '_debut.inc.php'; ?>

<form method='post' action='rechercheGroupe.php'>
    <div class="container">
        <div class="row ">
            <?php include_once 'menuGauche.inc.php'; ?>

            <!-- Entre deux layout -->
            <div class="col-md-1 ">

            </div>

            <!-- Layout Droit -->
            <div class="col-md-8 ">
                <br />






                <!-- Zone de recherche -->
                <div class="row">
                    <div class="input-group col-lg-8"> 
                        <input type="text" class="form-control" name="nom" id="nom"  maxlength='50' placeholder="rechercher un groupe...">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-success" type="submit">Go!</button>
                        </span>
                    </div>

                </div>
                <br><br><br>

                <!-- résultats --> 
                <?php if (isset($_REQUEST["nom"])): ?>

                    <?php
                    $nom = $_REQUEST['nom'];
                    $collectionGroupe = rechercheGroupe($nom);
                    if ($collectionGroupe != false):
                        foreach ($collectionGroupe as $groupe):
                            ?>
                            <div class="col-md-9 ">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?php echo $groupe['id']; ?></h3>
                                    </div>
                                    <div class="panel-body">
                                        <p> <?php echo $groupe['nom']; ?> </p>
                                        <p> <?php echo $groupe['identiteResponsable']; ?> </p>
                                        <p> <?php echo $groupe['adressePostale']; ?> </p>
                                        <p>
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            <?php echo $groupe['nombrePersonnes']; ?>
                                        </p>
                                        <address><?php echo $groupe['nomPays']; ?></address>
                                        <p>
                                            <?php if ($groupe['hebergement'] == 1): ?>
                                                Hebergement 
                                            <?php else: ?>
                                                Aucun hebergement
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div> 

                            </div>
                            <?php
                        endforeach;
                    else:
                        ?>
                        <div >
                            <h4>
                                Aucun résultats
                            </h4>
                        </div>

                    <?php endif; ?>

                <?php endif; ?>
                <!-- /résultats --> 

            </div><!-- /Layout Droit -->
        </div><!-- /row principale -->
    </div><!-- /container --> 
</form>


<?php include_once '_fin.inc.php'; ?>
