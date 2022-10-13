<?php include 'connexion.php' ?>
<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];

    $consultadel="DELETE FROM PRODUCTS WHERE id = $id";

    $products = mysqli_query($connexio, $consultadel);};
    ?>