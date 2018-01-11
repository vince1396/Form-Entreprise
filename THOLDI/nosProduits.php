<?php include("entete.php"); ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Vos avantages</strong>
                </h2>
                <hr>
            </div>				
            <div class="col-md-6">
                <img class="img-responsive img-border-left" src="img/CONTAINEX-Galerie-01.jpg" width ="500" height ="400" alt="">
            </div>

            <div class="col-md-6">
                <p> </p>
                <br />
                <p> <img src = "img/53901.png" width ="25" height ="25" > Excellente qualité de peinture </p>
                <br />
                <p> <img src = "img/53901.png" width ="25" height ="25" > Dépôts dans toute l’Europe </p>
                <br />
                <p> <img src = "img/53901.png" width ="25" height ="25" > Livraison rapide </p>
                <br />
                <p> <img src = "img/53901.png" width ="25" height ="25" > Les conteneurs ont bien sûr une plaquette CSC valable </p>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>




    <?php
    $listeContainers = listeContainers();
    foreach ($listeContainers as $container):
        ?>
        <form method="post" action="nosProduit.traitement.php">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>

                        <h2 class="intro-text text-center">
                            <strong><?php echo $container["libelleTypeContainer"] ?></strong>
                        </h2>
                        <hr>
                    </div>


                        <p><u>Tarif:</u> <br>

                    <div class="col-md-6">
                        <img class="img-responsive img-border-left" src="<?php echo $container["image"] ?>" width ="500" height ="400" alt="">
                    </div>

                    <div class="col-md-6">


                        <p><u>Quantité:</u>
                            <input type="number" name="quantity" min="1" max="50">
                            <input type ="hidden" name="typeContainer" value="<?php echo $container["libelleTypeContainer"] ?>">  </p>

                        <p><u>Dimensions:</u><br>
                            Longueur: <?php echo $container["longueurCont"] ?> <br>
                            Largeur: <?php echo $container["largeurCont"] ?> <br>
                            Poids: <?php echo $container["poidsCont"] ?> <br>
                            Poids: <?php echo $container["capaciteDeCharge"] ?> <br><br> </p>
                            Journalier: <?php echo $container["tarifJour"] ?> <br>
                            Trimestriel: <?php echo $container["tarifTrim"] ?> <br>
                            Annuel: <?php echo $container["tarifAnn"] ?> <br>

                        </p>

                        <button  type="submit" class="btn btn-primary btn-sm" >Ajouter au panier</button></p>	
                    </div>
                    <div class="clearfix"></div>
                </div>
        </form>

        <?php
    endforeach;
    ?>


    <!--jQuery -->
    <script src = "js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
