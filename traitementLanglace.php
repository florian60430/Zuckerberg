<?php
session_start();include "fonctions.php";
//echo sera le flux de sortie vers le fichier xml Json.
If (isset($_GET['img'])){
    $idModif = 0;
    if($_GET['img']==1){
        //TODO FAIRE TA REQUETE DE VOTE
        $idModif = $_SESSION["id1"];
    }else{
        //TODO FAIRE TA REQUETE DE VOTE
        $idModif = $_SESSION["id2"];
    }
    if(aleatoireImageEnSession()){
        ?>
        <div>Hello tu ha valider l'image id N° <?php echo $idModif;?></div>
        
        <?php
        recupDonneePhoto($_SESSION["id1"],$_SESSION["id2"]);


    }else{
        echo "<div>Hello tu ha valider l'image id N°". $idModif." FIN DU JEU</div>" ;
    };

    
}else{
echo "<div>Hello Personne</div> " ;
} ?>