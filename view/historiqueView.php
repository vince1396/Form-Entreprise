<section id="consulter">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="">
                   <form action="#" method="post">
                    <label for="rechercher">Rechercher:</label>
                    <input type="text" name="rechercher"><br>
                    <label for="interet">Niveau d'intérêt:</label>
                    *<input type="checkbox" name="interet" value="1">
                    **<input type="checkbox" name="interet" value="2">
                    ***<input type="checkbox" name="interet" value="3"><br>
                    <label for="prospect">Prospect</label>
                    <input type="checkbox" name="prospect" value="1">
                    <label for="client">Client</label>
                    <input type="checkbox" name="prospect" value="2"><br>
                    <label for="bureautique">Bureautique</label>
                    <input type="checkbox" name="cInteret" value="1">
                    <label for="informatique">Informatique</label>
                    <input type="checkbox" name="cInteret" value="2">
                    <label for="solution">Solution</label>
                    <input type="checkbox" name="cInteret" value="3">
                    <label for="telephonie">Téléphonie</label>
                    <input type="checkbox" name="cInteret" value="4">
                    <input type="submit" name="submit">
                    </form>
                </div>
                
                <?php
                if(isset($_POST['submit'])){
                    
                    echo $message;
//                    foreach($req2 as $k=>$v){
//                        
//                        echo $v['nom_c']."<br>";
//                    }
//                    foreach($req3 as $k=>$v){
//                        
//                        echo $v['nom_c']."<br>";
//                    }
//                    foreach($req4 as $k=>$v){
//                        
//                        echo $v['nom_c']."<br>";
//                    }
//                    foreach($req as $k=>$v){
//                        
//                        echo $v['nom_c']."<br>";
//                    }
                }
                ?>
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