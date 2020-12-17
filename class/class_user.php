<?php

class user
{
    private $_id;
    private $_idSession;
    private $_bdd;

    public function __construct($bdd, $idSession)
    {

        $data = $bdd->query("SELECT * from user WHERE id_session = '" . $idSession . "'");
        $userExist = $data->rowcount();
        $tabData = $data->fetch();
        $data2 = $bdd->query("SELECT * from manga");

        if ($userExist == 0) {
            $bdd->query("INSERT INTO `user`(`id_user`, `id_session`) VALUES (NULL, '" . $idSession . "')");
            $dataNoob = $bdd->query("SELECT * from user WHERE id_session = '" . $idSession . "'");
            $tabDataNoob = $dataNoob->fetch();

            while ($tabData2 = $data2->fetch()) {
                $idManga = $tabData2['id_manga'];
                $bdd->query("INSERT INTO `assoc`(`id_assoc`, `id_user`, `id_manga`, `etat`) VALUES (NULL, " . $tabDataNoob['id_user'] . ", " . $idManga . ", 0)");
            }
        }
        $this->_id = $tabData['id_user'];
        $this->_idSession = $tabData['id_session'];
        $this->_bdd = $bdd;

        $data->closeCursor();
    }

    public function verifUserExist($idUser)
    {

        $data = $this->_bdd->query("SELECT * from user WHERE id_user = " . $idUser . "");
        if (isset($data)) {
            //if($userExist = $data->rowcount() == 0) {
            return true;
        } else {

            return false;
        }
    }

    public function assocMangaUser()
    {
        $data = $this->_bdd->query("SELECT * from manga");
        while ($tabData = $data->fetch()) {
            $idManga = $tabData['id_manga'];
            //echo "INSERT INTO `assoc`(`id_assoc`, `id_user`, `id_manga`, `etat`) VALUES (NULL, ".$this->_id.", ".$tabData['id_manga'].", 0)";
            $this->_bdd->query("INSERT INTO `assoc`(`id_assoc`, `id_user`, `id_manga`, `etat`) VALUES (NULL, " . $this->_id . ", " . $idManga . ", 0)");
        }

        $data->closeCursor();
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
