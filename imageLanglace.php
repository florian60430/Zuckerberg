<?php 
session_start();
include "fonctions.php";
?>

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

    <?php
       
       try {


        $host = "192.168.64.56";
        $login = "florian";
        $mdp = "60430";
        $dbName = "marc";

        $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, '' . $login . '', '' . $mdp . '');
    
        $result = $bdd->query("select * from manga"); 
        $_SESSION["ids"]=   array();
       
        while ($tab = $result->fetch()){
            array_push($_SESSION["ids"],$tab['id_manga']);
            echo "coucou";
        }

            $connect =  true;
        } catch (Exception $e) {
        
            $e->getMessage();
            $connect = false;
        } 

       
        //$_SESSION["ids"]=array(2,3,4,5,6,7);
        
        aleatoireImageEnSession();
       

    

    ?>


    <h1>Le choix</h1>

    <div class="container">
        <div id="game" class="row">
            
                <?php recupDonneePhoto($_SESSION["id1"],$_SESSION["id2"]) ?>
           
           
            </div>
        </div>
    </div>

    <script type="text/javascript" src="ajax.js"></script>
</body>
</html>
