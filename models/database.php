<?php
class Database
{
    //une methode static est une methode qu'on peut executer sans instancier la class dans laquel elle est implementée
    public static function dbConnect()
    {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=localhost;dbname=wf3_php_final_wassila", "root", "");
        } catch (PDOException $e) {
            $conn = $e->getMessage();
        }
        return $conn;
    }
}