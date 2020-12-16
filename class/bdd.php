<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=marc; charset=utf8', 'root', '');
}
catch(PDOException $e){
    echo $e->getMessage();  
}

?>