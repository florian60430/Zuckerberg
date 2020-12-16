<?php
session_start();
require("class/class_manga.php");
require("class/bdd.php");

$manga = new manga($bdd);
$classement = $manga->getClassement();
?>

<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="background-image: url('img/back.jpg');background-attachment: fixed;background-position: center center;">
    <nav class="red">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo right"><b>Zeuqueurbeurgue</b></a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="image.php">Shuffle</a></li>
            <li class="active"><a href="main.php">Classement</a></li>
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
            <div class="row">
                <div class="center-align">
                    <a href="imageLanglace.php">
                        <button class="btn-large waves-effect waves-light"><b>VOTER!</b></button>
                    </a>
                </div>
            </div>
            <div class="row">
                <h3 class="center-align yellow-text text-darken-1"><i><?php echo $classement[0]['nom'] ?></i></h3>
            </div>
            <div class="row">
                <div class="col s6">
                    <h3 class="center-align grey-text text-darken-0"><i><?php echo $classement[1]['nom'] ?></i></h3>
                </div>
                <div class="col s6">
                    <h3 class="center-align orange-text text-darken-4"><i><?php echo $classement[2]['nom'] ?></i></h3>
                </div>
            </div>
            <div class="row">
                <h4 class="center-align">Classement</h4>
            </div>
            <div class="row">
                <table class="striped centered responsive-table">
                    <thead>
                        <tr>
                            <th>Position</th>
                            <th>Manga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $position = 1;
                        for ($i = 0; $i < sizeof($classement); $i++) {
                            echo "<tr>
                                <td>" . $position . "</td>
                                <td>" . $classement[$i]['nom'] . "</td>
                            </tr>";
                            $position++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>