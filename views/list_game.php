<?php 
include_once "inc/header.php";
require_once "../models/gameModel.php";
 $listGame = Game::listGame(); ?>



<div class="container">
<h1>List des jeux disponibles</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Minimum Player</th>
                <th>max_players</th>
            </tr>
            
        </thead>
        <?php foreach ($listGame as $Game) { ?>
            <tbody>

                <tr>
                    <th scope="row">
                        <?= $Game['title']; ?>
                    </th>

              
         
                  
                    <th scope="row">

                        <?= $Game['min_players']; ?>
                    </th>

                
                    <th scope="row">

                        <?= $Game['max_players']; ?>
                    </th>

                </tr>
            </tbody>

        <?php } ?>
    </table>

<?php include_once "inc/footer.php" ?>