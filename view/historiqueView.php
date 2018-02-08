<section id="consulter">
    <div class="container">
        <div class="row">
            <tbody class="col-md-12">
                <div class="search_form">
                   <form action="#" method="post">
                       <select name="interet" class="select_interet">
                           <option value="0">Niveau d'intérêt</option>
                           <option value="1">*</option>
                           <option value="2">**</option>
                           <option value="3">***</option>
                       </select>
                       <select name="prospect" class="select_prospect">
                           <option value="0">Séléctionner un type</option>
                           <option value="1">Prospect</option>
                           <option value="2">Client</option>
                       </select>
                       <select name="cInteret" class="select_cinteret">
                           <option value="0">Type de contrat</option>
                           <option value="1"  class="cInteret1">Bureautique</option>
                           <option value="2"  class="cInteret2">Informatique</option>
                           <option value="3"  class="cInteret3">Solution</option>
                           <option value="4"  class="cInteret4">Téléphonie</option>
                       </select>

                       <!-------------------------------------------->

                            <label for="date_min" class="label_date">Entre le:</label>
                            <input type="date" name="date_min">

                    <label for="date_max" class="label_date">Et le:
                    <input type="date" name="date_max"></label>
                    <label for="rechercher" class="label_search">
                    <input type="text" name="rechercher" placeholder="Rechercher..."  class="search">
                    <input type="submit" name="submit" class="submit_search"></label>
                    </form>
                </div>

                <?php
                if(isset($_POST['submit'])) {
                    $temoin = true;
                    $number = 1;
                    if ($message != "") {
                        echo "<b>".$message."</b>";
                    } else { ?>
                        <br>
                        <h3>Résultats de la recherche:</h3>
                    <div class="table-responsive table_historique">
                    <table class="table table-striped table-bordered table-hover tablesorter" id="sortTable_1">
                        <thead>
                            <tr>
                                <th class="th_search">#</th>
                                <th class="th_search">Raison sociale</th>
                                <th class="th_search">Nom du client</th>
                                <th class="th_search">Date de rendez-vous</th>
                                <th class="th_search">Option</th>
                                <th class="th_search">Niveau d'intérêt</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                        foreach ($req as $k => $v) { ?>
                                <tr>
                                    <td>
                                        <?= $number; ?>
                                    </td>
                                    <td><span><?= $v["raison"]; ?></span></td>
                                    <td><span><?= $v["nom_c"]; ?></span></td>
                                    <td><?= $v['date_rdv']; ?></td>
                                    <td><span><a href="index.php?p=consulter&id=<?= $v["id_f"]; ?>">Voir le dossier</a></span>
                                    </td>
                                    <td><span class="hidden"><?= $v['interet']; ?></span>
                                        <?php
                                        if($v["interet"] == "1"){
                                            for($i = 0; $i < $v["interet"]; $i++)
                                            {
                                                echo "<i class='fa fa-star red-star'></i>";
                                            }
                                        }
                                        if($v["interet"] == "2"){
                                            for($i = 0; $i < $v["interet"]; $i++)
                                            {
                                                echo "<i class='fa fa-star yellow-star'></i>";
                                            }
                                        }
                                        if($v["interet"] == "3"){
                                            for($i = 0; $i < $v["interet"]; $i++)
                                            {
                                                echo "<i class='fa fa-star green-star'></i>";
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php $number++; ?>

                            <?php $temoin = false; ?>

                        <?php }
                        if ($temoin) { ?>
                            <tr>
                                <td>Aucun résultat</td>
                                <td>Aucun résultat</td>
                                <td>Aucun résultat</td>
                                <td>Aucun résultat</td>
                                <td>Aucun résultat</td>
                                <td>Aucun résultat</td>
                            </tr>
                        <?php
                        }?>
                        </tbody>
                        </table>
                    </div>
                   <?php }
                }



                ?>
                <div class="table-responsive table_historique">
                   <h3 class="center">Liste des clients</h3>
                    <table class="table table-striped table-bordered table-hover tablesorter" id="sortTable_2">
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
                                foreach($r as $k=>$v){
                            ?>
                                <tr>
                                    <td>
                                        <?= $number; ?>
                                    </td>
                                    <td><span><?= $v["raison"]; ?></span></td>
                                    <td><span><?= $v["nom_c"]; ?></span></td>
                                    <td><?= $v['date_rdv'];?></td>
                                    <td><span><a href="index.php?p=consulter&id=<?=$v["id_f"];?>">Voir le dossier</a></span></td>
                                    <td><span class="hidden"><?= $v['interet']; ?></span>
                                        <?php
                                        if($v["interet"] == "1"){
                                            for($i = 0; $i < $v["interet"]; $i++)
                                            {
                                                echo "<i class='fa fa-star red-star'></i>";
                                            }
                                        }
                                        if($v["interet"] == "2"){
                                            for($i = 0; $i < $v["interet"]; $i++)
                                            {
                                                echo "<i class='fa fa-star yellow-star'></i>";
                                            }
                                        }
                                        if($v["interet"] == "3"){
                                            for($i = 0; $i < $v["interet"]; $i++)
                                            {
                                                echo "<i class='fa fa-star green-star'></i>";
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php $number++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>