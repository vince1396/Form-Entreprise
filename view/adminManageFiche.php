<table>
    <tr>
        <th>#</th>
        <th>Commercial / CDV</th>
        <th>Client</th>
        <th>Intérêt</th>
    </tr>
    <?php
        foreach(getTabFiches() as $k => $v)
        { ?>
            <tr>
                <td>1</td>
                <td><?= $v['nom']." ".$v['prenom']; ?></td>
                <td><?= $v['raison']; ?></td>
                <td><?= $v['interet']; ?></td>
            </tr>
            <?php
        }
    ?>
</table>
