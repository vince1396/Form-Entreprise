<?php
include("_debut.inc.php");
if (isset($_SESSION["login"])):
    ?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Mes informations personnelles</strong> 
                    </h2>
                    <hr>

                    <hr class="visible-xs">
                    <?php
                    $collectionInformations = informationClient();
                    ?>
                    <b>Nom: </b><?php echo $collectionInformations['contact']; ?> <br>
                    <b>Adresse: </b> <?php echo $collectionInformations['adresse']; ?> <br>
                    <b>Code postal: </b><?php echo $collectionInformations['cp']; ?> <br>
                    <b>Adresse mail: </b> <?php echo $collectionInformations['adrMel']; ?> <br>
                    <b>Telephone: </b><?php echo $collectionInformations['telephone']; ?><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                   <hr>
                    <h2 class="intro-text text-center">
                        <strong>Mes reservations</strong> 
                    </h2>
                    <hr>

                    <hr class="visible-xs">
                    <?php
                    $collectionClient = informationReservation();
                    ?>
                    <b>Code de reservation: </b><?php echo $collectionClient['codeReservation']; ?> <br>
                    <b>Date de début de reservation: </b> <?php echo $collectionClient['dateDebutReservation']; ?> <br>
                    <b>Date de fin de reservation: </b> <?php echo $collectionClient['dateFinReservation']; ?> <br>
                    <b>Date de reservation: </b> <?php echo $collectionClient['dateReservation']; ?> <br>
                    <b>Type de container: </b> <?php echo $collectionClient['libelleTypeContainer']; ?> <br>
                    <b>Type de container: </b> <?php echo $collectionClient['libelleTypeContainer']; ?> <br>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php else: ?>

    <div class="container">
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Inscription -->
            <div class="col-lg-7">

                <div class="well">
                    <hr><h2 class="intro-text text-center">
                        <strong>Créer mon espace client</strong>
                    </h2><hr>
                    <form method='post' action='espaceClient.traitement.php'>

                        <div class="form-group">

                            <input name="contact" type="text" placeholder="NOM" class="form-control">

                        </div>
                        <div class="form-group">
                            <input name="raisonSociale" type="text" placeholder="Nom de l'entreprise" class="form-control">
                        </div>
                        <div class="form-group">

                            <input name="adrMel" type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="login" type="text" placeholder="Login" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="mdp" type="password" placeholder="Mot de passe" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="mdp2" type="password" placeholder="Confirmation du mot de passe" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="adresse" type="text" placeholder="Adresse" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="ville" type="text" placeholder="Ville" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="cp" type="text" placeholder="Code postal" class="form-control">
                        </div>

                        <div class="form-group">
                            <input name="telephone" type="text" placeholder="Téléphone" class="form-control">
                        </div>
                        <div class="form-group">
                            <p>Pays:
                                <select name="codePays">
                                    <?php
                                    $listePays = listePays();
                                    foreach ($listePays as $pays) :
                                        ?>
                                        <option value='<?php echo $pays["codePays"]; ?>'>
                                            <?php echo $pays["nomPays"]; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </p>
                        </div>

                        <div> <button type="submit" class="btn btn-primary btn-sm">Inscription</button> </div>
                    </form>

                </div>

            </div>
            <!-- Fin Inscription -->

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Se connecter -->
                <div class="well">
                    <hr><h2 class="intro-text text-center">
                        <strong>J'ai déja mon espace client</strong>
                    </h2><hr>
                    <form action="connexion.php" method="post">
                        <div class="form-group">
                            <input name="login" type="text" placeholder="Login" class="form-control">

                        </div>
                        <div class="form-group">
                            <input name="mdp" type="password" placeholder="Mot de passe" class="form-control">
                        </div>
                        <div> <button type="submit" class="btn btn-primary btn-sm">Connexion</button> </div>
                    </form>

                </div>
            </div>

        </div>
        <!-- /.container -->
    <?php endif; ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


<?php include("_fin.inc.php"); ?>