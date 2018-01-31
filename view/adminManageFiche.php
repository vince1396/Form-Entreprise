<div class="container white_body">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Commercial / CDV</th>
                <th>Client</th>
                <th>Intérêt</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
</div>