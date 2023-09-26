<?php include_once "inc/header.php" ?>


    <form action="traitement/action.php" method="POST">

    <h1>Ajouter un joueur</h1>

        <label for="text">Email</label>
        <input type="email" name="email" class="form-control">

        <label for="text">Nickname:</label>
        <input type="text" name="nickname" class="form-control">

        <button type="submit" name="player" class="btn btn-primary"> Add Player</button>

    </form>

<?php include_once "inc/footer.php"?>