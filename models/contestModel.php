<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/wf3_poo_Wassila/models/database.php";
class Contest
{

    public static function addContest($game_id, $start_date)
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("INSERT INTO contest (id_game, start_date) VALUES (?, ?) ");


        // executer la requete
        try {
            $request->execute(array($game_id, $start_date));
            header("Location: http://localhost/wf3_poo_wassila/views/list_contest.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function listContest()
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("SELECT c.*, g.*, p.*, COUNT(cp.player_id) AS nombre_de_joueurs  FROM contest c  LEFT JOIN player p ON c.winner_id = p.id  LEFT JOIN game g ON c.id_game = g.id_game  LEFT JOIN player_contest cp ON c.id_contest = cp.contest_id  GROUP BY c.id_contest, g.id_game  ORDER BY c.start_date DESC");

        // executer la requete
        try {
            $request->execute();
            $listPlayer = $request->fetchAll();
            return $listPlayer;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}