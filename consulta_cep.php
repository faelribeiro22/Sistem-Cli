<?php 
    require "connection.php";
    require "filtro.php";
    $conn = conecxao();

    header("Content-Type: application/json");
    $cep = $_GET['cep'];
    echo $cep;
?>