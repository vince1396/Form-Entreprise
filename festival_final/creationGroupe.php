<?php include_once '_debut.inc.php'; ?>

<form method='post' action='creationGroupe.traitement.php'>
    <div class="container">
        <div class="row ">
            <?php include_once 'menuGauche.inc.php'; ?>

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
                                <input type="text"  class="form-control" name="id" id="id"  maxlength='8'   pattern="^[a-zA-Z0-9]{2,8}$" title="Saisir 2 caractères au minimum"  required>
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
                                <input type="text" class="form-control width300" name="nomGroupe" id="nomGroupe" size="50" 
                                       maxlength="45" pattern="^[-'çéèùa-zA-Z\s ]*{1,45}$" title="Saisir 1 caractères au minimum" required>
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->

                    <br/>

                    <!-- ligne IDENTITE RESPONSABLE -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group ">
                                <span class="input-group-addon bgColorTheme minTextBox">Identité responsable</span>
                                <input type="text" name="identiteResponsable" id="identiteResponsable" class="form-control width200"  pattern="^[-,'°çéèù0-9a-zA-Z\s]{3,45}$" title="Saisir une identité valide: 3 caractères au minimum" maxlength="45" required>

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
                                    Adresse postale
                                </span>
                                <textarea class="form-control width300" rows="3" name="adressePostale" id="adressePostale" maxlength="120" title="Saisir une adresse postale" required ></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br/>

                    <!-- ligne NOMBRE DE PERSONNES COMPOSANT LE GROUPE  -->
                    <div class="row">
                        <div class="col-md-7">

                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox">
                                    Nombre de personnes
                                </span>
                                <input type="text" class="form-control width50" name="nombrePersonnes" id="nombrePersonnes" title="Nombre de personnes composant le groupe" maxlength="5" pattern="^[0-9]{1,5}$" required />
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br/>

                    <!-- ligne PAYS -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >Pays d'origine
                                </span>
                                <input type="text" class="form-control width200" name="nomPays" id="nomPays" title="Saisir le pays dont le groupe est originaire" maxlength="70" required />

                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br /> 

                    <!-- ligne HEBERGEMENT -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="input-group ">
                                <span class="input-group-addon bgColorTheme" >
                                    Hebergement O/N
                                </span>
                                <input type="hebergement" class=" form-control width40"  name="hebergement" id="hebergement" title="" maxlength="1"  />

                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br /> 

                    <!-- Zone de validation -->
                    <div class="row">
                        <div class="col-lg-2">  
                            <input class="btn btn-primary btn-lg  " type="submit" value="Valider">
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

<?php include_once '_fin.inc.php'; ?>