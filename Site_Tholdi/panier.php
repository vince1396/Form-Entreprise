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

                <table class="table">
                    <thead>
                        <tr>
                            <th>Type du container</th>
                            <th>Quantité</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION["panier"] as $key => $value): ?>
                            <tr>
                                <td><?php echo $key; ?></td>
                                <td><?php echo $value; ?></td>

                        
                        <td><p><a href="suppressionPanier.php?article=<?php echo $key ?>" >                                   
                                    <input type="button" class="btn btn-primary btn-sm" value="Supprimer">
                                </a>
                            </p>
                        </td>
                        </tr>

                        <?php
                    endforeach;
                    ?>

                    </tbody>
                </table>
                <input type="button" class="btn btn-primary btn-sm" value="Valider" onclick="location.href = 'panier2.php'">
                        
            </div>	


            <div class="col-lg-12">

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>




<!-- jQuery -->
<script src="js/jquery.js"></script>

 <!--Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</table>
</form>
</body>
</html>
<?php include("_fin.inc.php"); ?>