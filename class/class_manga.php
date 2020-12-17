<?php

class manga
{
    private $_bdd;
    private $_id;
    private $_name;
    private $_note;
    private $_path;

    public function __construct($bdd, $idManga)
    {

        $data = $bdd->query("SELECT * from manga WHERE id_manga = " . $idManga . "");
        $tabData = $data->fetch();

        $this->_bdd = $bdd;
        $this->_id = $idManga;
        $this->_name = $tabData['nom'];
        $this->_note = $tabData['note'];
        $this->_path = $tabData['adresse'];
        
        $data->closeCursor();
    }

    /* METHODE GET */
    public function getId()
    {
        return $this->_id;
    }

    public function getname()
    {
        return $this->_name;
    }

    public function getnote()
    {
        return $this->_note;
    }

    public function getPath()
    {
        return $this->_path;
    }

    /* METHODE SET */

    public function setId($newId)
    {
        $this->_id = $newId;
    }

    public function setName($newName)
    {
        $this->_name = $newName;
    }

    public function setNote($newNote)
    {
        $this->_note = $newNote;
    }

    public function setPath($newPath)
    {
        $this->_path = $newPath;
    }

    public function getClassement()
    {
        $data = $this->_bdd->query("SELECT * FROM manga ORDER BY note DESC");
        $i = 0;
        while ($tabData = $data->fetch()) {
            $classement[$i] = $tabData;
            $i++;
        }
        $data->closeCursor();
        
        return $classement;
    }
}
