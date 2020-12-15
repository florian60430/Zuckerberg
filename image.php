<?php include 'fonction.php'; include 'config.php'; ?>
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
    //$bdd = new PDO('mysql:host=localhost;dbname=marc', 'florian', '60430');
      $bdd = new PDO('mysql:host='.$host.';dbname='.$dbName,''.$login.'' , ''.$mdp.'');
   
    $connect =  true;
} catch (Exception $e) {

    $e->getMessage();
    $connect = false;
}

$nbImageBdd = 5 ;
$image = new image($bdd);

$id1 = $image->getRand($nbImageBdd);
$id2 = $image->getRand($nbImageBdd);

$id1 = $image->verifMatch($id1, $id2);
$link1 = $image->getPath($id1);
$link2 = $image->getPath($id2);

$name1 = $image->getName($id1);
$name2 = $image->getName($id2);


?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="index.php"> <img src="<?php echo $link1; ?>" class="image1"> </a>
                <div class="name"><?php echo $name1;?></div>
            </div>
            <div class="col-6">
                <a href="index.php"> <img src="<?php echo $link2; ?>" class="image2"></a>
                <div class="name"><?php echo $name2;?></div>
            </div>
        </div>
    </div>
</body>

</html>