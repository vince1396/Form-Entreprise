<?php include_once '_debut.inc.php'; ?>

<form method='post' action='rechercheEtablissement.php'>
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
                        <input type="text" class="form-control" name="nom" id="nom"  maxlength='50' placeholder="rechercher un établissement...">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-success" type="submit">Go!</button>
                        </span>
                    </div>

                </div>
                <br><br><br>

                <!-- résultats -->
                <?php
                if (isset($_REQUEST["nom"])):
                    ?>

                    <?php
                    $nom = $_REQUEST['nom'];
                    $etablissement = rechercheEtablissement($nom);
                    if ($etablissement != false):
                        foreach ($etablissement as $etablissement):
                            ?>
                            
                                <div class="col-md-9 ">
                                    <article>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><?php echo $etablissement['id']; ?></h3>
                                            </div>
                                            <div class="panel-body">
                                                <p> <?php echo $etablissement['nom']; ?> </p>
                                                <p> <?php echo $etablissement['adresseRue']; ?> <?php echo $etablissement['codePostal']; ?> </p>
                                                <p>
                                                    <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                                    <?php echo $etablissement['ville']; ?>
                                                </p>
                                                <address><?php echo $etablissement['tel']; ?></address>
                                                <p>
                                                    <?php if ($etablissement['type'] == 1): ?>
                                                        Etablissement scolaire 
                                                    <?php else: ?>
                                                        Autre établissement
                                                    <?php endif; ?>
                                                </p>
                                                <p>
                                                    <?php echo $etablissement['civiliteResponsable'] . " " . $etablissement['prenomResponsable'] . " " . $etablissement['nomResponsable']; ?>
                                                </p>
                                                <p> <?php echo $etablissement['nombreChambresOffertes']; ?> chambre(s)proposées </p>
                                            </div>
                                        </div> 
                                    </article>
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