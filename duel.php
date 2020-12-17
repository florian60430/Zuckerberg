<?php
session_start();
include "fonctions.php";
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Shuffle - Zuck</title>
    <link rel="icon" type="image/png" href="img/icon.png" />
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
    <?php include 'menu.php' ?>
    <div class="white container z-depth-3" style="margin-top:2%;margin-bottom:2%;padding-top : 2%; padding-bottom : 2%;">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="center-align red-text flow-text" id="titre">
                        <b>Zeuqueurbeurgue!</b>
                    </h1>
                </div>
            </div>
            <?php

            aleatoireImageEnSession($bdd) ?>
            <div id="game" class="row">
                <?php
                if (recupDonneePhoto($_SESSION["id1"], $_SESSION["id2"], $bdd) == false) ?>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="ajax.js"></script>
</body>

</html>