<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/wf3_poo_Wassila/models/database.php";
class Game
{

    public static function addGame($title, $min_players, $max_players)
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("INSERT INTO game (title, min_players, max_players) VALUES (?, ?, ?) ");

        // executer la requete
        try {
            $request->execute(array($title, $min_players, $max_players));
            header("Location: http://localhost/wf3_poo_wassila/views/list_game.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function listGame()
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("SELECT * FROM game");

        // executer la requete
        try {
            $request->execute();
            $listGame = $request->fetchAll();
            return $listGame;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}