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

<?php
//selectIdManga($bdd);
?>

<body style="background-image: url('img/back.jpg');background-attachment: fixed;background-position: center center;">
    <nav class="red">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo right"><b>Zeuqueurbeurgue!</b></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) { ?>
                    <li class="active"><a href="imageLanglace.php">Shuffle</a></li>
                    <li><a href="main.php">Classement</a></li>
                    <li><a href="logout.php">Deconnexion</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <div class="white container z-depth-3 hide-on-small-only" style="margin-top:2%;margin-bottom:2%;padding-top : 2%; padding-bottom : 2%;">
        <div class="container">
            <div class="row">
                <h1 class="center-align red-text">
                    <b>Zeuqueurbeurgue!</b>
                </h1>
            </div>
            <?php if (isset($_SESSION['logged']) == true) { ?>
                <?php if ($result = aleatoireImageEnSession($bdd) == true) { ?>
                    <div id="game" class="row">
                    <?php recupDonneePhoto($_SESSION["id1"], $_SESSION["id2"], $bdd);
                } else {
                    header('Location:main.php');
                } ?>
                    </div>
                <?php } else { ?>
                    <div class="row">
                        <div class="center-align">
                            <h3 class="red-text">403 : FORBIDDEN</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="center-align">
                            <a href="index.php">Retour en zone sûre</a>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>
    <div class="hide-on-med-and-up">
        <div class="row">
            <h1 class="center-align red-text">
                <b>Zeuqueurbeurgue!</b>
            </h1>
            <?php if (isset($_SESSION['logged']) == true) {
                if ($result = aleatoireImageEnSession($bdd) == true) {
                    recupDonneePhotoMobile($_SESSION["id1"], $_SESSION["id2"], $bdd);    
                } else { 
                    header('Location:main.php');
                }
            } else { ?>
                <div class="row">
                    <div class="center-align">
                        <h3 class="red-text">403 : FORBIDDEN</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="center-align">
                        <a href="index.php">Retour en zone sûre</a>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
    <script type="text/javascript" src="ajax.js"></script>
</body>

</html>