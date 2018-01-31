<div class="white_body container">
               <h2 class="center">Fiches client de <?= $req2['prenom']." ".$req2['nom'];?></h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Raison sociale</th>
                                <th>Nom du client</th>
                                <th>Date de rendez-vous</th>
                                <th>Option</th>
                                <th>Niveau d'intérêt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $number = 1 ;
                                foreach($req as $k=>$v){
                            ?>
                                <tr>
                                    <td>
                                        <?= $number; ?>
                                    </td>
                                    <td><span><?= $v["raison"]; ?></span></td>
                                    <td><span><?= $v["nom_c"]; ?></span></td>
                                    <td><span><?= $v["date_rdv"]; ?></span></td>
                                    <td><span><a href="index.php?p=detailDossier&id1=<?=$v["id_f"];?>&id2=<?=$v["id_u"];?>">Voir le dossier</a></span></td>
                                    <td><span><?= $v["interet"]; ?></span></td>
                                </tr>
                                <?php $number++; } ?>
                        </tbody>
                    </table>
                </div>
                
                <a href="gestionChef"><button class="btn btn-primary">Retour</button></a>
</div>