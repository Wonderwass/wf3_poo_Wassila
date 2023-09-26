<?php
include_once "inc/header.php";
require_once "../models/gameModel.php";

$listGame = Game::listGame();

?>

<form action="traitement/action.php" method="POST">

<h1>Ajouter un match</h1>
    <div class="mb-3">

        <label class="form-label">Nom du jeu : </label>

            <select name="game_id" class="form-control">

                <option value="">choose game</option>

                <?php foreach ($listGame as $game) { ?>

                    <option value="<?= $game["id_game"] ?>">

                        <?= $game["title"] ?>

                    </option>

                <?php } ?>

            </select>
        
        <label class="form-label">Date du jeu : </label>
        <input name="start_date" type="date" class="form-control">
      
    </div>


    <button type="submit" class="btn btn-primary" name="contest">Add Game</button>
</form>

<?php include_once "inc/footer.php" ?>