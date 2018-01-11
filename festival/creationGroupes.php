<?php include_once '_debut.inc.php'; ?>
<?php include_once '_gestionBase.inc.php'; ?>

<form method='post' action='creationEtablissement.traitement.php'>
    <div class="container">
        <div class="row ">
            <div class="col-md-3 border">
                <br />
                <div id="menuGauche" class="btn-group-vertical btn-block">

                    <a href="consultationGroupes.php" class="btn btn-primary ">
                        CONSULTER</a>
                    <a href="creationGroupes.php" class="btn btn-primary  ">
                        AJOUTER</a>

                    <a href="#" class="btn btn-primary btn-block">
                        RECHERCHER</a>
                </div> 
                <img src="img/clefmusique.gif" class="img-responsive" alt="Responsive image">
            </div>

            <!-- Entre deux layout -->
            <div class="col-md-1 border">

            </div>

            <!-- Layout Droit -->
            <div class="col-md-8 border">
                <br />
                <article>


                    <!-- ligne ID ETAB -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">

                                <span class="input-group-addon minTextBox bgColorTheme" >Identifiant</span>
                                <input type="text"  class="form-control" name="id" id="id"  maxlength='8'   pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 3 caractères au minimum"  required>
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->

                    <br />

                    <!-- ligne NOM ETAB -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox">Nom</span>
                                <input type="text" class="form-control" name="nom" id="nom" size="50" 
                                       maxlength="45" pattern="^[-'çéèùa-zA-Z\s]{1,45}$" title="Saisir le nom de l'établissement" required>
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->

                    <br/>

                    <!-- ligne ADRESSE -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group ">
                                <span class="input-group-addon bgColorTheme minTextBox">Identite du Responsable</span>
                                <input type="text" name="identiteResponsable" id="identiteResponsable" class="form-control"  pattern="^[-,'°çéèù0-9a-zA-Z\s]{3,45}$" title="Saisir le nom du responsable" maxlength="45" required>

                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br />

                    <!-- ligne CP -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >
                                    Adresse postale
                                </span>
                                <input type="text" class="form-control" name="adressePostale" id="adressePostale" maxlength="5" pattern="^[a-zA-Z0-9]{2,5}$" title="Saisir le code postal" required />
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br/>

                    <!-- ligne VILLE  -->
                    <div class="row">
                        <div class="col-md-7">

                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox">
                                    Nombre de personnes
                                </span>
                                <input type="text" class="form-control" name="nombrePersonnes" id="nombrePersonnes" title="Saisir le nombre de personnes" maxlength="35" pattern="^[-'çéèùa-zA-Z\s]{1,35}$" required />
                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br/>

                    <!-- ligne TELEPHONE -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >Nationalité
                                </span>
                                <input type="text" class="form-control" name="nomPays" id="nomPays" title="Saisir un nom de pays" maxlength="10" pattern="^[0-9]{10,10}$" required />

                            </div>
                        </div>
                    </div>
                    <!-- /ligne -->
                    <br /> 

                    <!-- ligne EMAIL -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >
                                    Hébergement
                                </span>
                                <input type="email" class="form-control"  name="hebergement" id="hebergement" title="Saisir un hébergement" maxlength="70"  />

                            </div>
                        </div>
                    </div>
                    <!-- /ligne EMAIL -->
                    <br />

                    <!-- ligne TYPE -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="radio-inline">
                                <input type='radio' name='type' id="etablissementScolaire" value='1' checked/>  
                                <label for="etablissementScolaire">Etablissement scolaire</label>
                            </div>
                            <div class="radio-inline">
                                <input type='radio' name='type' id="autre" value='0' />  
                                <label for="autre">Autre</label>
                            </div>
                        </div>
                    </div>
                    <br />


                    <!-- ligne Responsable -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Responsable</h3>
                                </div>
                                <div class="panel-body">
                                    <select id="civiliteResponsable" name='civiliteResponsable'>
                                        <option selected>M.</option>
                                        <option>Mme</option>
                                        <option>Mlle</option>
                                    </select>
                                    <br />
                                    <br />
                                    <div class="input-group">
                                        <span class="input-group-addon minTextBox" >Nom</span>
                                        <input type="text" id="nomResponsable" name=
                                               "nomResponsable" size="26" maxlength="25" pattern="^[-'çéèùa-zA-Z\s]{1,25}$" title="Saisir 1 caractères au minimum" required>
                                    </div>
                                    <br />
                                    <div class="input-group">
                                        <span class="input-group-addon minTextBox" >Prenom</span>
                                        <input type="text"   id="prenomResponsable" name="prenomResponsable" size="26" maxlength="25">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br />

                    <!-- Nombre de chambres offertes -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">Nombre de chambres offertes</span>
                                <input type="text" class="form-control " id="nombreChambresOffertes" name="nombreChambresOffertes" title="Saisir le nombre de chambres offertes" pattern="^[0-9]{1,3}$" maxlength="2" required aria-describedby="basic-addon3">
                            </div>
                        </div>
                    </div>


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

<?php include_once '_fin.inc.php'; ?>