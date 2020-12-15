<?php include 'config.php';
class image
{

    private $_nbManga;
    private $_bdd;
    private $_listIdManga;
    private $_indice;


    function __construct($bdd)

    {
        $this->_bdd = $bdd;

       /* $i = 0;
        $brutData = $this->_bdd->query("SELECT * from manga");
        while ($data = $brutData->fetch()) {
            $listIdManga[$i] = $data['id_manga'];
            $i++;
        }

        $this->_listIdManga = $listIdManga;

        $brutData = $this->_bdd->query("SELECT * from manga");

        $Data = $brutData->fetch();
        $this->_nbManga = $brutData->rowcount() - 1;*/
    }

    public function getMaxId() {

        $dataBrut = $this->_bdd->query('SELECT * FROM manga WHERE id_manga = (SELECT MAX(id_manga) FROM manga)');
        $maxId = $dataBrut->fetch();
        return $maxId[0];
    }

    public function getMinId() {

        $dataBrut = $this->_bdd->query('SELECT * FROM manga WHERE id_manga = (SELECT MIN(id_manga) FROM manga)');
        $minId = $dataBrut->fetch();
        return $minId[0];
    }
/*
    public function getIndice()
    {
        $indice = rand(0,  $this->_nbManga);
        return $indice;
    }

    public function getManga($indice)
    {
        return $this->_listIdManga[$indice];
    }

    public function verifMatch($id1, $id2)
    {
        $brutData = $this->_bdd->query("SELECT * from manga");
        $i = 0;
        while ($data = $brutData->fetch()) {
            $idImage[$i] = $data['id_manga'];
            $i++;
        }

        while ($id1 == $id2) {

            $rand = rand(0,  $this->_nbManga);
            $id1 = $idImage[$rand];
        }

        return $id1;
    }


    public function listMangeDejaShuffle($idUser) 
    {

        $i = 0;
        $brutData = $this->_bdd->query("SELECT * from assoc where id_user=" . $idUser . "");
        while ($data = $brutData->fetch()) {

            $mangaDejaShuffle[$i] = $data["id_manga"];
            $i++;
        }
        return $mangaDejaShuffle;


    }

*/
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

/*
    public function MangadejaShuffle($idUser)
    {

        $i = 0;

        $brutData = $this->_bdd->query("SELECT * from assoc where id_user=" . $idUser . "");
        while ($data = $brutData->fetch()) {

            $mangaDejaShuffle[$i] = $data["id_manga"];
            $i++;
        }
        return $mangaDejaShuffle;
        // je regarde si l'utilisateur à déja voté pour l'image si oui je prend le prochain id dans la bdd

    }

    public function verifMangaDejaShuffle($idmanga, $idMangaDejaShuffle)
    {

        if ($idmanga == $idMangaDejaShuffle) {

            return true;
        } else {

            return false;
        }
    }*/
}
