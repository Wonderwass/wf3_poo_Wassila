<?php
session_start();
require_once "../../models/playerModel.php";
require_once "../../models/contestModel.php";
require_once "../../models/gameModel.php";



if (isset($_POST['player'])) {
    $nickname = htmlspecialchars($_POST['nickname']);
    $email = htmlspecialchars($_POST['email']);


    Player::addPlayer($nickname, $email);
}
if (isset($_POST['game'])) {
    $title = htmlspecialchars($_POST['title']);
    $min_players = htmlspecialchars($_POST['min_players']);
    $max_players = htmlspecialchars($_POST['max_players']);


    Game::addGame($title, $min_players, $max_players);
}
if (isset($_POST['contest'])) {
    $id_game = htmlspecialchars($_POST['game_id']);
    $start_date = htmlspecialchars($_POST['start_date']);


    Contest::addContest($id_game, $start_date);
}