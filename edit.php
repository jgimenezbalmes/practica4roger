<?php include 'connexion.php' ?>
<?php


if (isset($_GET['id'])){
    $id = $_GET['id'];

$query1="SELECT * FROM PRODUCTS WHERE id = $id";

$nom = $query1['Name'];
$desc = $query1['Description'];
$price = $query1['price'];




}

    



    ?>
