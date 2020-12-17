<?php 

$host = "192.168.64.83";
$login = "admin";
 $mdp = "root";
$dbName = "marc";

    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, '' . $login . '', '' . $mdp . '');
