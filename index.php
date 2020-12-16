<?php
session_start();
require("class/class_user.php");
require("class/bdd.php");

$user = new user($bdd);

if (isset($_POST['subLogin'])) {
    $messageLogin = $user->login($_POST['mailLogin'], $_POST['passwordLogin']);
}

if (isset($_POST['subSignin'])) {
    $messageSignin = $user->signin($_POST['mailSignin'], $_POST['passwordSignin'], $_POST['confirmPasswordSignin']);
}
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
    <div class="container">
        <div class="row">
            <h1 class="center-align red-text">
                <b>Zeuqueurbeurgue!</b>
            </h1>
        </div>
        <?php if (!isset($messageSignin)) {
            echo "<div class='row' id='login'>";
        } else {
            echo "<div class='row' id='login' style='display:none'>";
        } ?>
            <form method="POST" action="">
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input type="text" name="mailLogin" id="mailLogin" class="validate">
                        <label for="mailLogin">Adresse mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input type="password" name="passwordLogin" id="passwordLogin" class="validate">
                        <label for="passwordLogin">Mot de passe</label>
                    </div>
                </div>
                <div class="row">
                    <?php if (isset($messageLogin)) {
                        echo $messageLogin;
                    } ?>
                </div>
                <div class="row">
                    <a href="#" onclick="displaySignin()">Inscription</a>
                    <div class="right-align">
                        <button class="btn waves-effect waves-light" type="submit" name="subLogin">Se connecter
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <?php if (isset($messageSignin)) {
            echo "<div class='row' id='signin'>";
        } else {
            echo "<div class='row' id='signin' style='display:none'>";
        } ?>
            <form method="POST" action="">
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input type="text" name="mailSignin" id="mailSignin" class="validate">
                        <label for="mailSignin">Adresse mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input type="password" name="passwordSignin" id="passwordSignin" class="validate">
                        <label for="passwordSignin">Mot de passe</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 offset-s2">
                        <input type="password" name="confirmPasswordSignin" id="confirmPasswordSignin" class="validate">
                        <label for="confirmPasswordSignin">Confirmer mot de passe</label>
                    </div>
                </div>
                <div class="row">
                    <?php if (isset($messageSignin)) {
                        echo $messageSignin;
                    } ?>
                </div>
                <div class="row">
                    <a href="#" onclick="displayLogin()">Connexion</a>
                    <div class="right-align">
                        <button class="btn waves-effect waves-light" type="submit" name="subSignin">S'inscrire
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>

<script type="text/javascript">
    function displayLogin() {
        var login = document.getElementById("login");
        var signin = document.getElementById("signin");

        login.style.display = "block";
        signin.style.display = "none";
    }

    function displaySignin() {
        var login = document.getElementById("login");
        var signin = document.getElementById("signin");

        login.style.display = "none";
        signin.style.display = "block";
    }
</script>