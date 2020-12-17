<?php
 include '../config.php';
 include 'class_manga.php';
session_start();

$_SESSION['id_session'] = session_id();
echo $_SESSION['id_session'];
?>


<br> <br>


<?php 

$manga = new manga($bdd, 2);

echo $manga->getId()."<br>";
echo $manga->getName()."<br>";
echo $manga->getNote ()."<br>";
echo $manga->getPath()."<br>";

$manga->setId(2);
$manga->setName(2);
$manga->setNote(2);
$manga->setPath(2);

echo $manga->getId()."<br>";
echo $manga->getName()."<br>";
echo $manga->getNote ()."<br>";
echo $manga->getPath()."<br>";
