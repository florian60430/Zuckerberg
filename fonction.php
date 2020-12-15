<?php include 'config.php';
class image
{

    private $_nbManga;
    private $_bdd;
    private $_note;


    function __construct($bdd)

    {
        $this->_bdd = $bdd;
    }

    public function getNote($idManga){

        $data = $this->_bdd->query("SELECT * from manga where id_manga=".$idManga."");
        $tabData = $data->fetch();
        $this->_note = $tabData['note'];
        return $this->_note;
    }

    public function setNote($idManga, $note) {

        $this->_bdd->query("UPDATE manga SET note = ".$note." WHERE id_manga =".$idManga."");
    }



    public function getIdManga($idUser) {

// on verifie si l'utilisateur n'a pas déja voté pour tout les manga 

//Nombre de manga dans la table
$data = $this->_bdd->query("SELECT COUNT(id_manga) as manga from manga");
$TabTotalManga = $data->fetch();

//Nombre de manga liké par le profil
$data2 = $this->_bdd->query("SELECT COUNT(id_user) as Totalmanga from assoc WHERE id_user =" . $idUser ."");
$TabTotalMangaLike = $data2->fetch();


if($TabTotalManga[0] != $TabTotalMangaLike[0]) {

// on initialise l'id du manga à 0
$idManga = 0;

// on vérifie si l'id correspond à un id attribué à un manga en base
$requete = $this->_bdd->prepare("SELECT * from manga where id_manga =".$idManga."");
$requete->execute();
$userExist = $requete->rowcount();

// on vérifie si l'id du manga n'a pas déja été voté par le user 
$data = $this->_bdd->query("SELECT * from assoc WHERE id_user =" . $idUser . " AND id_manga = " . $idManga . "");
$tabData = $data->fetch();
$state = $tabData["value"];

while ($userExist == 0 || $state == 1) 

    {
        $idManga++;

// on vérifie si l'id correspond à un id attribué à un manga en base
$requete = $this->_bdd->prepare("SELECT * from manga where id_manga =".$idManga."");
$requete->execute();
$userExist = $requete->rowcount();

// on vérifie si l'id du manga n'a pas déja été voté par le user 
$data = $this->_bdd->query("SELECT * from assoc WHERE id_user =" . $idUser . " AND id_manga = " . $idManga . "");
$tabData = $data->fetch();
$state = $tabData["value"];

    }
} else {

    echo "vous avez deja tout voté";
}       
return $idManga;
    }


    public function getPath($id)
    {
        $brutData = $this->_bdd->query("SELECT adresse from manga where id_manga =" . $id . "");
        $path = $brutData->fetch();
        return $path[0];
    }


    public function getName($id)
    {
        $brutData = $this->_bdd->query("SELECT nom from manga where id_manga =" . $id . "");
        $name = $brutData->fetch();
        return $name[0];
    }

    public function ajoutePoint($idManga) {



    }
}
