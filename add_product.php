<?php

include 'connexion.php';

$nom = $_POST['name'];
$descripcio = $_POST['desc'];
$preu = $_POST['price'];

$query2 = "INSERT INTO PRODUCTS (`Name`, `Description`, `price`) VALUES ('$nom', '$descripcio', '$preu')";

$products = mysqli_query($connexio, $query2);
if($products){
    echo "<script>alert('Added new product'); window.location='index.php';</script>";
}
?>


