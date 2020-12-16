<?php
session_start();

include "fonctions.php";
include 'config.php';
$bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, '' . $login . '', '' . $mdp . '');
//echo sera le flux de sortie vers le fichier xml Json.
if (isset($_GET['img'])) {
    $idModif = 0;
    if ($_GET['img'] == 1) {
        //TODO FAIRE TA REQUETE DE VOTE

        $bdd->query("UPDATE manga SET note = note + 10 WHERE id_manga = " . $_SESSION['id1'] . "");
        $bdd->query("INSERT INTO `assoc` (`id_assoc`, `id_user`, `id_manga`, `etat`) VALUES (NULL, ".$_SESSION['id_user'].", ".$_SESSION['id1'].", 1), (NULL, ".$_SESSION['id_user'].", ".$_SESSION['id2'].", 1)");
        $idModif = $_SESSION["id1"];
    } else {

        $bdd->query("UPDATE manga SET note = note + 10 WHERE id_manga = " . $_SESSION['id2'] . "");
        $bdd->query("INSERT INTO `assoc` (`id_assoc`, `id_user`, `id_manga`, `etat`) VALUES (NULL, ".$_SESSION['id_user'].", ".$_SESSION['id1'].", 1), (NULL, ".$_SESSION['id_user'].", ".$_SESSION['id2'].", 1)");
        $idModif = $_SESSION["id2"];
    }
    if (aleatoireImageEnSession()) {
?>
        <div>Hello tu ha valider l'image id N° <?php echo $idModif; ?></div>

<?php
        recupDonneePhoto($_SESSION["id1"], $_SESSION["id2"]);
    } else {
        echo "<div>Hello tu ha valider l'image id N°" . $idModif . " FIN DU JEU</div>";
    };
} else {
    echo "<div>Hello Personne</div> ";
} ?>