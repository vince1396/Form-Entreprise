<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Festival Folklorique</title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="bootstrap/css/theme.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Festival Folklorique</a>
                    <a class="navbar-brand" href="gestionEtablissements.php">Gestion des établissements</a>
                    <a class="navbar-brand" href="gestionGroupe.php">Gestion des groupes</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    
                        <form  method="post" class="navbar-form navbar-right" role="form" 
                               action="index.php">

                            <div class="form-group">
                                
                                    <input name="user" type="text" placeholder="Email" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <input name="mdp" type="password" placeholder="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">S'authentifier</button>

                        </form>


                    

<!-- Section à inclure dans le TD Authentification -->

<!--                        <div class="row">
                            <div class="col-md-2 col-lg-offset-1">
                                <p class="white">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                                    <span class="text-center"></span>
                                </p>
                            </div>
                            <div class="col-md-2 white">
                                <a href="?logout" class="white">
                                    <span class="glyphicon glyphicon-log-out " aria-hidden="true" title="log-out">
                                    </span>    
                                </a>
                            </div>
                        </div>-->

                  
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <br />



