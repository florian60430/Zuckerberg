<?php include 'config.php';


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
    // Il faut choisir tout les manga dont l'état dans la table d'association n'existe pas ou si il existe il faut select tout le reste sauf ceux dont l'id est le notre
    // SELECT manga.id_manga FROM manga LEFT JOIN assoc ON manga.id_manga = assoc.id_manga WHERE assoc.id_user != 7
    // SELECT manga.id_manga FROM manga LEFT JOIN assoc ON manga.id_manga = assoc.id_manga WHERE assoc.id_user = 7 AND assoc.etat = 0
    $result = $bdd->query("SELECT manga.id_manga FROM manga LEFT JOIN assoc ON manga.id_manga = assoc.id_manga WHERE assoc.id_user = " . $_SESSION['id_user'] . " AND assoc.etat = 0");
    while ($tab = $result->fetch()) {
        array_push($_SESSION["ids"], $tab['id_manga']);
    }
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
    $result1 = $bdd->query("select * from manga where id_manga='" . $id1 . "'");
    $tab1 = $result1->fetch();
    $result2 = $bdd->query("select * from manga where id_manga='" . $id2 . "'");
    $tab2 = $result2->fetch();

    $link1 = $tab1['adresse'];
    $link2 = $tab2['adresse'];
    $name1 = $tab1['nom'];
    $name2 = $tab2['nom'];;
?>
    <div id="game" class="row hide-on-med-and-up">
        <div class="row">
            <div class="col s12" id="img1">
                <div class="center-align">
                    <a href="#">
                        <img style="width:100%;height:auto;" src="<?php echo $link1 ?>" class="image1 z-depth-4">
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
                        <img style="width:100%;height:auto;" id="img2" src="<?php echo $link2 ?>" class="image1 z-depth-4">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="game" class="row hide-on-small-only">
        <div class=row>
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
}
?>