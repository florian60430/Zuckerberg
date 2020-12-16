<?php include 'fonction.php';
include 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<?php 

try {
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, '' . $login . '', '' . $mdp . '');

    $connect =  true;
} catch (Exception $e) {

    $e->getMessage();
    $connect = false;
}
/*
if(isset($_POST['id1'])) {

    $dataBrut = $bdd->query("SELECT note from manga where id_manga=".$_POST['id1']."");
    $data = $dataBrut->fetch();
    $point = $data[0] + 10; 

    $bdd->query("UPDATE manga SET note = ".$point." where id_manga =".$_POST['id1']."");
    echo "UPDATE manga SET note = ".$point." where id_manga =".$_POST['id1']."";
  
} 

if(isset($_POST['id2'])) {

    $dataBrut = $bdd->query("SELECT note from manga where id_manga=".$_POST['id2']."");
    $data = $dataBrut->fetch();
    $point = $data[0] + 10;

    $bdd->query("UPDATE manga SET note = ".$point." where id_manga =".$_POST['id2']."");
 
}*/
if(isset($_POST['btn1'])) {

$manga = new image($bdd);
$id1 = $manga->getIdManga(1);
$link1 = $manga->getPath($id1);
$note = $manga->getNote($id1);
$newNote = $note + 10;
$manga->setNote($id1, $newNote);
    
} else if (isset($_POST['btn2'])) {

    $manga = new image($bdd);
    $id2 = $manga->getIdManga(1);
    $link2 = $manga->getPath($id2);
    $note = $manga->getNote($id2);
    $newNote = $note + 10;
    $manga->setNote($id2, $newNote);

}

else {

$manga = new image($bdd);
$id1 = $manga->getIdManga(1);
$link1 = $manga->getPath($id1);
/*$link2 = $manga->getPath($id2);
*/
$link1 = $manga->getPath($id1);
$name1 = $manga->getName($id1);
}
/*$name2 = $manga->getName($id2);

*/

// on doit verifier si l'image afficher n'est pas déja voté par le user et si elle n'est pas déja affiché 

?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">   
                <a href=""> <img src="<?php echo $link1?>" class="image1"></a>
            </div>
            <form action="" method="POST">
                <input type="submit" value="<?php echo $name1; ?>" name="btn1">
            </form>
            <div class="col-6">  
            <a href=""> <img src="<?php echo $link2?>" class="image2"></a>
            </div>
            <form action="" method="POST">
                <input type="submit" value="<?php echo $name2; ?>" name="btn2">
            </form> 
            </div>
        </div>
    </div>
</body>

</html>

