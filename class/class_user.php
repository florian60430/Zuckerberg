<?php 

class user
{
    private $_id;
    private $_idSession;
    private $_bdd;

    public function __construct($bdd, $idSession)
    {

        $data = $bdd->query("SELECT * from user WHERE id_session = '".$idSession."'");
        if ($data->rowcount() == 0) 
        {
            $bdd->query("INSERT INTO `user`(`id_user`, `id_session`) VALUES (NULL, '".$idSession."')");
        }

        $tabData = $data->fetch();

        $this->_id = $tabData['id_user'];
        $this->_idSession = $tabData['id_session'];
        $this->_bdd = $bdd;
    }

    public function verifUserExist($idUser) {
        // Todo vérifier si l'utilisateur n'existe pas déja en bdd
    }

    public function assocMangaUser() 
    {
        $data = $this->_bdd->query("SELECT * from manga");
        while ($tabData = $data->fetch()) 
        {
            $idManga = $tabData['id_manga'];
            //echo "INSERT INTO `assoc`(`id_assoc`, `id_user`, `id_manga`, `etat`) VALUES (NULL, ".$this->_id.", ".$tabData['id_manga'].", 0)";
            $this->_bdd->query("INSERT INTO `assoc`(`id_assoc`, `id_user`, `id_manga`, `etat`) VALUES (NULL, ".$this->_id.", ".$idManga.", 0)");
        }
    }

/* METHOD GET */

    public function getId()
    {
        return $this->_id;
    }

    public function getIdSession()
    {
        return $this->_idSession;
    }

/* METHOD SET */

    public function setId($newId) 
    {
        $this->_id = $newId;
    }

    public function setIdSession($newIdSession)
    {
        $this->_idSession = $newIdSession;
    }
}