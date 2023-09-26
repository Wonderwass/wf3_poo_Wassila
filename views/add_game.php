<?php include_once "inc/header.php" ?>

<form action="traitement/action.php" method="POST">

<h1>Ajouter un Jeu</h1>
  <div class="mb-3">

    <label  class="form-label">Ajouter un jeu :</label>
    <input name="title" type="text" class="form-control"  >

    <label  class="form-label">Minimum player :</label>
    <input name="min_players" type="text" class="form-control"  >

    <label  class="form-label">Max player :</label>
    <input name="max_players" type="text" class="form-control"  >

 
  </div>


  <button type="submit" class="btn btn-primary" name="game">Add Game</button>
</form>

<?php include_once "inc/footer.php" ?>