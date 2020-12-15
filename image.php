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

if (isset($indice1) && isset($indice1)) {
    $indice1++;
    $indice2--;
} else {

    $manga = new image($bdd);
    $id1 = $manga->getMaxId();
    $id2 = $manga->getMinId();
}

$link1 = $manga->getPath($id1);
$link2 = $manga->getPath($id2);

$name1 = $manga->getName($id1);
$name2 = $manga->getName($id2);

/*
$id1 = $manga->getManga($indice1);
$id2 = $manga->getManga($indice2);
$i = 0;

$TabMangaDejaShuffle = $manga->listMangeDejaShuffle(1);
echo "id deja shuffle = " . $TabMangaDejaShuffle[0] . "<br>";
echo "id = " . $id1 . "<br>";



if ($id1 == $TabMangaDejaShuffle[0]) {
    $indice1++;
    $id1 = $manga->getManga($indice1);
}

echo "id deja shuffle = " . $TabMangaDejaShuffle[0] . "<br>";
echo "id = " . $id1 . "<br>";


$id1 = $manga->verifMatch($id1, $id2);

$link1 = $manga->getPath($id1);
$link2 = $manga->getPath($id2);

$name1 = $manga->getName($id1);
$name2 = $manga->getName($id2);



// on doit verifier si l'image afficher n'est pas déja voté par le user et si elle n'est pas déja affiché 


*/

?>

<style>

.btn1{

    height: 200px;
    width: 400px;
    background-image: url("img/dbz.jpg");
}

</style> 

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <input type="submit" class="btn1" value="">
                </form>
                <a href=""> <img src="<?php echo $link1; ?>" class="image1"> </a>
                <div class="name"><?php echo $name1; ?></div>
            </div>
            <div class="col-6">
                <form action="" method="post">
                    <input type="submit" class="btn2" value="">
                </form>
                <a href=""> <img src="<?php echo $link2; ?>" class="image2"></a>
                <div class="name"><?php echo $name2; ?></div>
            </div>
        </div>
    </div>
</body>

</html>