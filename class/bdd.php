<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=zuckerberg; charset=utf8', 'root', '');
}
catch(PDOException $e){
    echo $e->getMessage();  
}

?>