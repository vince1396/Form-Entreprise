<div class="white_body container">
               <h2 class="center">Liste des commerciaux</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Commercial</th>
                                <th>Email</th>
                                <th>Option</th>
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
                                    <td><span><?=$v['prenom']." ".$v["nom"]; ?></span></td>
                                    <td><span><?=$v['email'];?></span></td>
                                    <td><span><a href="index.php?p=consulterChef&id=<?=$v["id_u"]; ?>">Consulter les fiches client</a></span></td>
                                </tr>
                                <?php $number++;} ?>
                        </tbody>
                    </table>
                    <br><br>
                    <div>
                        <a href="ficheClient"><button class="btn btn-primary">Créer une fiche client</button></a>
                    </div>
                </div>
                <br><br>
</div>
