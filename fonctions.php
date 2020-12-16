<?php

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

function aleatoireImageEnSession()
{
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
function recupDonneePhoto($id1, $id2)
{

    $host = "localhost";
    $login = "root";
    $mdp = "";
    $dbName = "marc";

    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, '' . $login . '', '' . $mdp . '');

    $result1 = $bdd->query("select * from manga where id_manga='" . $id1 . "'");
    $tab1 = $result1->fetch();
    $result2 = $bdd->query("select * from manga where id_manga='" . $id2 . "'");
    $tab2 = $result2->fetch();

    $link1 = $tab1['adresse'];
    $link2 = $tab2['adresse'];
    $name1 = $tab1['nom'];
    $name2 = $tab2['nom'];;
?>
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
<?php

}



?>