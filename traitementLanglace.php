<?php
session_start();

include "fonctions.php";
include 'config.php';

//echo sera le flux de sortie vers le fichier xml Json.
if (isset($_GET['img'])) {
    if ($_GET['img'] == 1) {

       ajoutePoints($bdd, $_SESSION['id1']);
       changeEtat($bdd);
    
    } else if ($_GET['img'] == 2) {

        ajoutePoints($bdd, $_SESSION['id2']);
        changeEtat($bdd);
    }
   if (aleatoireImageEnSession($bdd)) {
        recupDonneePhoto($_SESSION["id1"], $_SESSION["id2"], $bdd);
    } else {
        
       
    }
} else {
 
}
