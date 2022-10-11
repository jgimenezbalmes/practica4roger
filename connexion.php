<?php
  $db_host = "localhost";
  $db_nombre = "products";
  $db_usuario = "root";
  $db_passwd = "";

  //Connexxió a POO/procediments

  //POO

  $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);

  $consulta = "SELECT * FROM PRODUCTS";

  $products = mysqli_query($connexio, $consulta);
  ?>