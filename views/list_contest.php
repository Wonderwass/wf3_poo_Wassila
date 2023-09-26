<?php
include_once "inc/header.php";
require_once "../models/contestModel.php";
$listContest = Contest::listContest();

?>

<h1>Liste des matchs</h1>

<div class="container">
    <table class="table">

        <thead>
            <tr>
                <th>
                    Nom de jeu
                </th>
                <th>
                    Date de démarrage
                </th>
                <th>
                    Pseudonyme du gagnant du match
                </th>
                <th>
                    Nombre de joueurs enregistrés
                </th>
            </tr>
        </thead>
    <?php foreach ($listContest as $Contest) { ?>
            <tbody class="<?= (strtotime($Contest['start_date']) > time()) ? 'match-pending' : ''; ?>">
                <th scope="row">
                    <?= $Contest['id_game']; ?>
                </th>



                <th scope="row">
                    <?= $Contest['start_date']; ?>
                </th>



                <th scope="row">
                    <?= $Contest['winner_id']; ?>
                </th>

                
                <th scope="row">
                    <?= $Contest['nombre_de_joueurs']; ?>
        </th>

               
                    </tr>
                </tbody>
        <?php } ?>
    </table>
</div>

<?php include_once "inc/footer.php" ?>