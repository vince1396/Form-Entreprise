<section id="consulter">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom du client</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $number = 1 ;
                                foreach($r as $k=>$v){
                            ?>
                                <tr>
                                    <td>
                                        <?= $number; ?>
                                    </td>
                                    <td><span><?= $v["nom_c"]; ?></span></td>
                                    <td><span><a href="index.php?p=consulter&id=<?=$v["id_f"]; ?>">Voir le dossier</a></span></td>
                                </tr>
                                <?php $number++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>