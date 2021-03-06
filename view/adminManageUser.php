<div class="container border_consult2">
     <form class="form_search" action="#" method="post">
      <input type="text" name="rechercher" placeholder="Rechercher un utilisateur" class="search_bar_admin">
      <input type="submit" name="search" class="submit_search_admin">
    </form>
    <!-- =============================================================================================================================== -->
    <form method="post">
        <?php
            if(isset($_POST['search']))
            {
                if ($req == NULL)
                {
                    echo "Aucun résultat";
                }
                else { ?>
                    <p class="title_admin_manage center"><u>Résultats de la recherche</u></p>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover tablesorter" id="sortTable_6">
                            <thead>
                            <tr>
                                <th class="th_search">#</th>
                                <th class="th_search">Nom</th>
                                <th class="th_search">Prénom</th>
                                <th class="th_search">Email</th>
                                <th class="th_search">Mot de passe</th>
                                <th class="th_search">Rôle</th>
                                <th class="th_search">Chef</th>
                                <th class="th_search">Options</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $id_editValues = 0;
                                    foreach ($req as $k => $v)
                                    {
                                        $id_editValues++; ?>
                                        <tr>
                                            <td class="editableColumns"><?= $v['id_u']; ?></td>
                                            <td><?= $number; ?></td>
                                            <td class="editableColumns"><?= $v["nom"]; ?>  </td>
                                            <td class="editableColumns"><?= $v["prenom"]; ?>   </td>
                                            <td class="editableColumns"><?= $v["email"]; ?>   </td>
                                            <td class="editableColumns"></td>
                                            <td class="editableColumns">
                                                <?php
                                                if ($v['lvl'] == 2) {
                                                    echo "Chef de vente";
                                                }
                                                if ($v['lvl'] == 1) {
                                                    echo "Commercial";
                                                } ?>
                                            </td>
                                            <td>
                                                <a href="#" class="editValues" id="<?= $id_editValues ?>">Modifier</a>
                                                <input type="submit" name="update" class="displayNone"> /
                                                <a href="index.php?p=adminManageUser&supp=<?= $v['id_u'] ?>">Bannir</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                }
            }
            ?>
    </form>
    <!-- =============================================================================================================================== -->
    <p class="title_admin_manage center"><u>Liste des utilisateurs</u></p>
    <form action="#" method="post">
        <label for="role">Afficher :</label>
        <select name="role" class="select_admin">
            <option value="all">Tous</option>
            <option value="2">Chefs de vente</option>
            <option value="1">Commerciaux</option>
            <option value="0">Bannis</option>
        </select>
        <input type="submit" value="Valider" name="triRole" />
    </form>
    <div class="table-responsive">
        <form method="post">
            <table class="table table-striped table-bordered table-hover tablesorter" id="sortTable_7">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Mot de passe</th>
                        <th>Rôle</th>
                        <th>Chef</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $id_editValues = 0;
                    foreach($getUsers as $k=>$v)
                    {
                        $id_editValues++; ?>
                        <tr>
                            <td class="editableColumns"><?= $v['id_u']; ?></td>
                            <td><?= $number; ?>   </td>
                            <td class="editableColumns"><?= $v["nom"];   ?>  </td>
                            <td class="editableColumns"><?= $v["prenom"];?>   </td>
                            <td class="editableColumns"><?= $v["email"]; ?>   </td>
                            <td class="editableColumns"></td>
                            <td class="editableColumns">
                                <?php
                                    if($v['lvl'] == 2)
                                    {
                                        echo "Chef de vente";
                                    }
                                    if($v['lvl'] == 1)
                                    {
                                        echo "Commercial";
                                    } ?>
                            </td>
                            <td>
                                <?php
                                    if($v['lvl'] == 2)
                                    {
                                        echo "/";
                                    }
                                    if($v['lvl'] == 1)
                                    {
                                        ?>
                                        <select name="chef" id="chef" disabled>
                                            <?php
                                              $rep = getChefUser($v['id_u']);
                                              $valeurChef = $rep['nom'].' '.$rep['prenom'];
    //                                          echo $rep['nom'] ." ". $rep['prenom'];
                                                foreach($getChef as $m=>$n) {
                                                    $valeurTousChef = $n['nom'].' '.$n['prenom'];
                                                    ?>
                                                    <option value="<?= $n['id_u']; ?>" <?php if($valeurChef == $valeurTousChef){ echo 'selected';} ?>><?=  $n['nom']." ".$n['prenom'] ; ?> </option>
                                                <?php }
                                                ?>
                                        </select>
                                            <?php
                                    }
                                ?>
                            </td>
                            <td>
                                <a href="#" class="editValues" id="<?= $id_editValues ?>">Modifier</a>
                                <input type="submit" name="update" class="displayNone"> /
                                <?php
                                    if ($v['ban'] == 1)
                                    { ?>
                                        <a href="index.php?p=adminManageUser&deban=<?= $v['id_u'] ?>">Débannir</a> <?php
                                    }
                                    else
                                    { ?>
                                        <a href="index.php?p=adminManageUser&supp=<?= $v['id_u'] ?>">Bannir</a> <?php
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php
                            $number++;
                    } ?>
                </tbody>
            </table>
        </form>
    </div>
    <?php
        if(isset($message))
        {
            echo $message;
        }
    ?>
</div>