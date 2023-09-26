<?php include_once "inc/header.php" ?>
<?php require_once "../models/playerModel.php";
$listPlayer = Player::listPlayer(); ?>

<h1>List des joeurs</h1>


<div class="container">

    <table class="table">

        <thead>
            <tr>
                <th>nickname</th>
                <th>Email</th>

            </tr>
        </thead>

        <?php foreach ($listPlayer as $player) { ?>

            <tbody>

                <tr>
                    <th scope="row">
                        <?= $player['nickname']; ?>
          
                    <th scope="row">
                        <?= $player['email']; ?>
                    </th>
                </tr>

            </tbody>

        <?php } ?>
    </table>





    <?php include_once "inc/footer.php" ?>