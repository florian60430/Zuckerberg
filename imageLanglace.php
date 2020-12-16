<?php 
session_start();
include "fonctions.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body style="background-image: url('img/back.jpg');background-attachment: fixed;background-position: center center;">

    <?php
       
       try {

        $host = "localhost";
        $login = "root";
        $mdp = "";
        $dbName = "marc";

        $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, '' . $login . '', '' . $mdp . '');
    
        $result = $bdd->query("SELECT * from manga"); 
        $_SESSION["ids"] = array();


       
        while ($tab = $result->fetch()){
            array_push($_SESSION["ids"],$tab['id_manga']);
        }

            $connect =  true;
        } catch (Exception $e) {
        
            $e->getMessage();
            $connect = false;
        } 

       
        //$_SESSION["ids"]=array(2,3,4,5,6,7);
        
        if ($result = aleatoireImageEnSession () == true) {
    ?>
    <nav class="red">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo right"><b>Zeuqueurbeurgue!</b></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li class="active"><a href="image.php">Shuffle</a></li>
                <li><a href="main.php">Classement</a></li>
                <li><a href="logout.php">Deconnexion</a></li>
            </ul>
        </div>
    </nav>
    <div class="white container z-depth-3" style="margin-top:2%;margin-bottom:2%;padding-top : 2%; padding-bottom : 2%;">
        <div class="container">
            <div class="row">
                <h1 class="center-align red-text">
                    <b>Zeuqueurbeurgue!</b>
                </h1>
            </div>
            <div id="game" class="row">
                
                    <?php recupDonneePhoto($_SESSION["id1"],$_SESSION["id2"]);
        }
        else {
            echo "Vous avez assez joué pour aujourdh'hui"; 
            
                    ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="ajax.js"></script>
</body>
</html>