<?php include 'config.php';
class image {

private $_nbImageBdd = 2;
private $_bdd;


function __construct($bdd) 

{
   $this->_bdd = $bdd;
}



public function getNbImage() {


}
public function getRand($nbImage) 
{

    $brutData = $this->_bdd->query("SELECT id_manga from manga");
    $data = $brutData->fetch();

    $rand = rand(0,$nbImage);
    echo "<div> rand = ".$rand."</div>";
    return $data[1];
  
  //  echo $data[$rand];
   // return $data[$rand];
}

public function verifMatch($rand1, $rand2)
{
    while ($rand1 == $rand2) 
    {
        $rand1 = rand(1,$this->_nbImageBdd);
    }

    return $rand1;
}











} 