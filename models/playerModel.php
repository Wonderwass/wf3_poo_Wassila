<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/wf3_poo_Wassila/models/database.php";
class Player
{
   
    public static function addPlayer($nickname, $email)
    {

        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("INSERT INTO player (nickname, email) VALUES (?, ?) ");

        // executer la requete
        try {
            $request->execute(array($nickname, $email));
            header("Location: http://localhost/wf3_poo_wassila/views/list_player.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function listPlayer()
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("SELECT * FROM player");

        // executer la requete
        try {
            $request->execute();
            $listPlayer = $request->fetchAll();
            return $listPlayer;

        }catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}