<?php if (isset($_SESSION['connecte']))
        {   
    echo ' ';
        }
    else    
    {
        header('Location:login');
    }
?>
<div class="container">
    <section id="ficheclient">
        <h3 class="info-title">La diversité de nos clients</h3>
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-3 col-sm-6">
                    <a href="img/portfolio/fullsize/grand-compte.jpg" class="portfolio-box"
                       title="Grands Comptes" data-capt="Melissa finance mobilise une équipe spécialisée pour vous proposer un service haut de gamme correspondant à vos exigences.">
                        <img src="img/portfolio/thumbnails/grand-compte.jpg" class="img-responsive" 
                             alt="Hommes d'affaires financiers, banquiers dans un bulding des grandes villes"
                              title="Melissa Finance accompagne les grands comptes">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-center">
                                    <i class="fa fa-2x fa-building" aria-hidden="true"></i>
                                </div>
                                <hr class="hr-galery">
                                <div class="project-name">
                                    Grands Comptes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="img/portfolio/fullsize/pme-pmi.jpg" class="portfolio-box"
                       title="PME-PMI" data-capt="Melissa Finance travaille en partenariat avec les partenaires adaptés pour proposer les services répondant aux besoins de votre structure.">
                        <img src="img/portfolio/thumbnails/pme-pmi.jpg" class="img-responsive" 
                             alt="Equipe jeune et dynamique d'une start-up, nouvelle PME"
                              title="Melissa Finance conseille les professionnels des PME et PMI">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-center">
                                    <i class="fa fa-2x fa-building-o" aria-hidden="true"></i>
                                </div>
                                <hr class="hr-galery">
                                <div class="project-name">
                                    PME-PMI
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
    <section>
        <div class="row accueil">
            <div class="col-xs-12 col-md-4 bloc">
               Hello
            </div>

       <div class="col-xs-12 col-md-4 bloc">
               Hello
            </div>
        </div>
    </section>
</div>