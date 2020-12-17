<?php session_start();
include 'config.php';
include 'class/class_user.php';
include 'class/class_manga.php';


$user = new user($bdd, session_id());
$manga = new manga($bdd, 2);

$_SESSION['id_user'] = $user->getId();
$_SESSION['id_session'] = $user->getIdSession();
?>
<html>

<head>
    <title>Accueil - Zuck</title>
    <link rel="icon" type="image/png" href="img/icon.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <?php include 'main.php'; ?>
    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>