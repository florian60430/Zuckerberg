<?php
    class manga{
        private $_bdd;
        public function __construct($bdd)
        {
            $this->_bdd = $bdd;
        }
        public function getClassement(){
            $reqClassement = $this->_bdd->query("SELECT * FROM manga ORDER BY note DESC");
            $i = 0;
            while($classement = $reqClassement->fetch()){
                $classementFinal[$i] = $classement;
                $i++;
            }
            return $classementFinal;
        }
    }
?>