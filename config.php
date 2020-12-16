<?php 

$host = "localhost";
$login = "root";
 $mdp = "";
$dbName = "marc";

    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, '' . $login . '', '' . $mdp . '');
