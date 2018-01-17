<?php if (isset($_SESSION['connecte']))
        {   
    echo ' ';
        }
    else    
    {
        header('Location:login');
    }
?>

<section id="nos-forces">
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <div class="row no-gutter popup-gallery">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <a href="" class="portfolio-box" title="" data-capt=""> <img src="./img/note1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-center"> <i class="fa fa-plus-square fa-4x" aria-hidden="true"></i> </div>
                                    <div class="project-name"> CREER UNE FICHE </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <a href="./img/note2.jpg" class="portfolio-box" title="PME-PMI" data-capt="Melissa Finance travaille en partenariat avec les partenaires adaptés pour proposer les services répondant aux besoins de votre structure."> <img src="./img/note2.jpg" class="img-responsive" alt="" title="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-center"><i class="fa fa-plus-square fa-4x" aria-hidden="true"></i> </div>
                                    <div class="project-name"> CONSULTER UNE FICHE </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>