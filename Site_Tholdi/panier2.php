<?php include("_debut.inc.php"); ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Panier</strong>
                </h2>
                <hr>

                <form method='post' action='panier2.traitement.php'>

                    <div class="form-group">
                        Date de début de la réservation :
                        <input name="dateDebut" type="date" placeholder="Date de début de la réservation" class="form-control">
                    </div>
                    <div class="form-group">
                        Date de fin de la réservation :
                        <input name="dateFin" type="date" placeholder="Date de fin de la réservation" class="form-control">
                    </div>
                    <div class="form-group">
                        <p>Ville où rendre les contenaires : 
                            <select name="codeVilleRendre">
                                <?php
                                $listeVille = listeVille();
                                foreach ($listeVille as $ville):
                                    ?>
                                    <option value='<?php echo $ville["codeVille"]; ?>'>
                                        <?php echo $ville["nomVille"]; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </p>
                    </div>
                    <div class="form-group">
                        <p>Ville où vous reservez les contenaires:
                            <select name="codeVilleReservation">
                                <?php
                                $listeVille = listeVille();
                                foreach ($listeVille as $ville) :
                                    ?>
                                    <option value='<?php echo $ville["codeVille"]; ?>'>
                                        <?php echo $ville["nomVille"]; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </p>
                    </div>
                    <div> 
                        <button type="submit" class="btn btn-primary btn-sm">Réserver</button> 
                    </div>
                </form>

            </div>	


            <div class="col-lg-12">

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>




<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</table>
</form>
</body>
</html>
<?php include("_fin.inc.php"); ?>