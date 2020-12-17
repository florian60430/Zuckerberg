<?php 

class user 
{
    private $_id;
    private $_idSession;
    private $_bdd;

    public function __construct($bdd, $idSession)
    {
        $bdd->query("INSERT INTO `user`(`id_user`, `id_session`) VALUES (NULL, '".$idSession."'");
        $data = $bdd->query("SELECT * from user WHERE id_session = '".$idSession."'");
        $tabData = $data->fetch();

        $this->_id = $tabData['id_user'];
        $this->_idSession = $tabData['id_session'];
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