<?php
include("_debut.inc.php");

if (isset($_GET["numGroupe"])) {
    $id = $_GET["numGroupe"];
    $groupe = obtenirDetailGroupe($id);
    $nom = $groupe['nom'];
    $idResponsable = $groupe['identiteResponsable'];
    $adressePostale = $groupe['adressePostale'];
    $nombresPersonnes = $groupe['nombrePersonnes'];
    $nomPays = $groupe['nomPays'];
    $hebergement = $groupe['hebergement'];
} else {
    header("location: consultationGroupe.php");
}
?>

<form method='post' action='modificationGroupe.traitement.php'>
    <div class="container">
        <div class="row ">
            <?php        include_once 'menuGauche.inc.php';?>

            <!-- Entre deux layout -->
            <div class="col-md-1 ">

            </div>

            <!-- Layout Droit -->
            <div class="col-md-8 ">
                <br />
                <article>



                    <!-- ligne ID GROUPE -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">

                                <span class="input-group-addon minTextBox bgColorTheme" >Identifiant</span>
                                <input type="text"  class="form-control" name="id" id="id"  maxlength='8'   
                                       pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 3 caractères au minimum"  
                                       value="<?php echo $id; ?>" required>
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->

                    <br />

                    <!-- ligne NOM GROUPE -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox">Nom</span>
                                <input type="text" class="form-control" value="<?php echo $nom; ?>" name="nom" id="nom" size="50" 
                                       maxlength="45" pattern="^[-'çéèùa-zA-Z\s]{1,45}$" title="Saisir 1 caractères au minimum" required>
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->

                    <br/>

                    <!-- ligne IDENTITE RESPONSABLE -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group ">
                                <span class="input-group-addon bgColorTheme minTextBox">Identite Responsable</span>
                                <input type="text" name="identiteResponsable" value="<?php echo $idResponsable; ?>" id="identiteResponsable" class="form-control"  pattern="^[-,'°çéèù0-9a-zA-Z\s]{3,45}$" title="Saisir une identité valide: 3 caractères au minimum" maxlength="45" required>

                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br />

                    <!-- ligne Adresse postale -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >
                                    Adresse postal
                                </span>
                                <input type="text" class="form-control" value="<?php echo $adressePostale; ?>"  name="adressePostale" id="adressePostale" pattern="^[-,'°çéèù0-9a-zA-Z\s]{3,120}$" title="Saisir une code postal valide" />
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br/>

                    <!-- ligne NOMBRE DE PERSONNES  -->
                    <div class="row">
                        <div class="col-md-7">

                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox">
                                    Nombre de personnes
                                </span>
                                <input type="text" class="form-control" value="<?php echo $nombresPersonnes; ?>"  name="nombresPersonnes" id="nombresPersonnes" maxlength="35" pattern="^[a-zA-Z0-9]{1,35}$" />
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br/>

                    <!-- ligne NOM PAYS -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >Nom Pays
                                </span>
                                <input type="text" class="form-control" value="<?php echo $nomPays; ?>" name="nomPays" id="nomPays" title="Saisir un nom de pays valide" maxlength="10" pattern="^[a-zA-Z0-9]{1,35}$" required />

                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br /> 

                    <!-- ligne HEBERGEMENT -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >
                                    hebergement
                                </span>
                                <input type="text" class="form-control" value="<?php echo $hebergement; ?>"  name="hebergement" id="hebergement" maxlength="70"  />

                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br />


                    <!-- Zone de validation -->
                    <div class="row">
                        <div class="col-lg-2">  
                            <input class="btn btn-primary btn-lg " type="submit" value="Valider">
                        </div>
                        <div class="col-lg-2">
                            <input class="btn btn-primary btn-lg " type="reset" value="Annuler">
                        </div>
                    </div>


                </article>
            </div><!-- /Layout Droit -->
        </div><!-- /row principale -->
    </div><!-- /container --> 
</form>
<?php include("_fin.inc.php"); ?>