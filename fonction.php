<?php include 'config.php';
class image
{

    private $_nbImageBdd = 5;
    private $_bdd;


    function __construct($bdd)

    {
        $this->_bdd = $bdd;
    }



    public function getNbImage()
    {
    }
    public function getRand($nbImage)
    {
        $i = 0;
        $brutData = $this->_bdd->query("SELECT * from manga");
        while ($data = $brutData->fetch()) {
            $idImage[$i] = $data['id_manga'];
            $i++;
        }

        $rand = rand(0, $nbImage);

        return $idImage[$rand];

        //  echo $data[$rand];
        // return $data[$rand];
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

            $rand = rand(0, $this->_nbImageBdd);
            $id1 = $idImage[$rand];
        }

        return $id1;
    }


    public function getPath($id) {

        $brutData = $this->_bdd->query("SELECT adresse from manga where id_manga =".$id."");
        $path = $brutData->fetch();

        return $path[0];
    }


    public function getName($id) {

        $brutData = $this->_bdd->query("SELECT nom from manga where id_manga =".$id."");
        $name = $brutData->fetch();

        return $name[0];
    }
}
