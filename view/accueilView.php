<?php if (isset($_SESSION['connecte']))
        {   
    echo ' ';
        }
    else    
    {
        header('Location:login');
    }
?>
                 

<section id="accueilview" class="paddingAccuei">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12 col-lg-12 text-center">
              <img src="./assets/css/ravelry-logo.png" class="logo-accueil">
          </div>
            <div class="container-fluid">
                <div class="row popup-gallery">
                   <h1 class="titreAccueil">Gestionnaire de Fiches </h1>
                    <div class="col-lg-5 col-md-5 col-xs-12 margin-bottom">
                        <a href="ficheClient" class="portfolio-box" title="" data-capt=""> <img src="./img/note1.jpg" class="img-responsive bordure" alt="">
                            <div class="portfolio-box-caption bordure">
                                <div class="portfolio-box-caption-content bordure">
                                    <div class="project-category text-center bordure"> <i class="fa fa-plus-square fa-4x" aria-hidden="true"></i> </div>
                                    <div class="project-name bordure"> CREER UNE FICHE </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-5 col-md-5 col-xs-12 col-lg-offset-2 col-md-offset-2">
                        <a href="historique" class="portfolio-box bordure" title="PME-PMI" data-capt=""> <img src="./img/note2.jpg" class="img-responsive bordure" alt="" title="">
                            <div class="portfolio-box-caption bordure">
                                <div class="portfolio-box-caption-content bordure">
                                    <div class="project-category text-center bordure"><i class="fa fa-search fa-4x" aria-hidden="true"></i> </div>
                                    <div class="project-name bordure"> CONSULTER UNE FICHE </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>