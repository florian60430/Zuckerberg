<?php include 'config.php';


function verifImageRestant($idSession, $bdd)
{

    $data = $bdd->query("SELECT manga.id_manga FROM manga LEFT JOIN assoc ON manga.id_manga = assoc.id_manga WHERE assoc.id_user = " . $_SESSION['id_user'] . " AND assoc.etat = 0");
    if ($data->rowcount() < 1) {

        return false;
    } else {
        return true;
    }

    $data->closeCursor();
}

function ajoutePoints($bdd, $idManga)
{
    $bdd->query("UPDATE manga SET note = note + 10 WHERE id_manga = " . $idManga . "");
}

function changeEtat($bdd)
{
    $bdd->query("UPDATE `assoc` SET `etat` = 1 WHERE id_user = " . $_SESSION['id_user'] . " AND id_manga = " . $_SESSION['id1'] . "");
    $bdd->query("UPDATE `assoc` SET `etat` = 1 WHERE id_user = " . $_SESSION['id_user'] . " AND id_manga = " . $_SESSION['id2'] . "");
}

function selectIdManga($bdd)
{

    $_SESSION["ids"] = array();
    // Il faut choisir dans la table d'assoc les manga ou l'id_user est le notre et leurs etat est à 0

    if (isset($_SESSION['id_user'])) {
        $result = $bdd->query("SELECT * FROM manga LEFT JOIN assoc ON manga.id_manga = assoc.id_manga WHERE assoc.id_user = " . $_SESSION['id_user'] . " AND assoc.etat = 0");
    } else {

        $dataUser = $bdd->query("SELECT * from user where id_session = '" . session_id() . "'");
        $tabDataUser = $dataUser->fetch();
        $_SESSION['id_user'] = $tabDataUser['id_user'];
        $result = $bdd->query("SELECT * FROM manga LEFT JOIN assoc ON manga.id_manga = assoc.id_manga WHERE assoc.id_user = " . $_SESSION['id_user'] . " AND assoc.etat = 0");
    }
    $i = 0;
    while ($tab = $result->fetch()) {
        array_push($_SESSION["ids"], $tab['id_manga']);
        $i++;
    }
    $result->closeCursor();
}

function rangeTableau($tableau)
{
    $newTab = array();
    foreach ($tableau as $key => $value) {
        if ($value != '') {
            array_push($newTab, $value);
        }
    }

    return $newTab;
}

function aleatoireImageEnSession($bdd)
{
    selectIdManga($bdd);
    if (sizeof($_SESSION["ids"]) < 2) {
        return false;
    } else {

        //Choix de la premiere image
        $indice = rand(0, sizeof($_SESSION["ids"]) - 1);

        $_SESSION["id1"] = $_SESSION["ids"][$indice];
        $_SESSION["ids"][$indice] = '';
        $_SESSION["ids"] = rangeTableau($_SESSION["ids"]);

        //Choix de la seconde
        $indice2 = rand(0, sizeof($_SESSION["ids"]) - 1);
        $_SESSION["id2"] = $_SESSION["ids"][$indice2];
        $_SESSION["ids"][$indice2] = '';
        $_SESSION["ids"] = rangeTableau($_SESSION["ids"]);

        return true;
    }
}

//recup les donnée image des des images en sessions
function recupDonneePhoto($id1, $id2, $bdd)
{
    if (sizeof($_SESSION["ids"]) < 2) { ?>
            </div>
            <div class="center">
                <a href="index.php">
                    <button class="btn-large waves-effect waves-light"><b>Voir le classement</b></button>
                </a>
            </div>
            <script>
                var nouvelClass = "center-align green-text flow-text";
                var nouveauText = "<b>Merci pour vos votes le classement a été mis à jour !</b>";
                document.getElementById('titre').innerHTML = nouveauText;
                document.getElementById('titre').className = nouvelClass;
            </script>
        </div>
      <?php  return false;
    } else {
        $result1 = $bdd->query("select * from manga where id_manga='" . $id1 . "'");
        $tab1 = $result1->fetch();
        $result2 = $bdd->query("select * from manga where id_manga='" . $id2 . "'");
        $tab2 = $result2->fetch();

        $link1 = $tab1['adresse'];
        $link2 = $tab2['adresse'];
        $name1 = $tab1['nom'];
        $name2 = $tab2['nom'];;

      //  echo "taille du tableau dans recupdonnePHOTO: " . sizeof($_SESSION["ids"]) . "<br>";
?>
        <!--
<div class="row hide-on-med-and-up">
        <div class="row">
            <div class="col s12" id="img1">
                <div class="center-align">
                    <a href="#">
                        <img style="width:100%;height:auto;" src="<?php// echo $link1 ?>" class="image1 z-depth-4">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="center-align">
                <b><i>VS</i></b>
            </h3>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="center-align">
                    <a href="#">
                        <img style="width:100%;height:auto;" id="img2" src="<?php// echo $link2 ?>" class="image1 z-depth-4">
                    </a>
                </div>
            </div>
        </div>
    </div>-->
        <div class="row hide-on-small-only">
            <div class="col s6" id="img1">
                <div class="center-align">
                    <a href="#">
                        <img style="width:90%;height:auto;" src="<?php echo $link1 ?>" class="image1 z-depth-4">
                    </a>
                </div>
            </div>

            <div class="col s6">
                <div class="center-align">
                    <a href="#">
                        <img style="width:90%;height:auto;" id="img2" src="<?php echo $link2 ?>" class="image2 z-depth-4">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col s6'>
                <div class="center-align">
                    <h5><b><?php echo $name1 ?></b></h5>
                </div>
            </div>
            <div class='col s6'>
                <div class="center-align">
                    <h5><b><?php echo $name2 ?></b></h5>
                </div>
            </div>
        </div>
        </div>
<?php
        return true;
    }
}
?>