<?php if (isset($_SESSION['connecte']))
        {    ?>
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="accueil">Accueil</a>
                    </li>
                    <?php
                        if($_SESSION['lvl'] == 3){
                    ?>
                     <li>
                        <a class="page-scroll" href="adminMain">Gestion Admin</a>
                    </li>
                    <?php
                        }
                        if($_SESSION['lvl']==2){
                    ?>
                    <li>
                        <a class="page-scroll" href="gestionChef">Espace Chef de vente</a>
                    </li>
                    <?php
                        }
                    ?>
                    <li>
                        <a class="page-scroll" href="deconnexion">Déconnexion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
       <?php } ?>
