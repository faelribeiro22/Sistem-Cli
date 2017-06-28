<?php 
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "clinica");

    function conecxao()
    {
        $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);

        if ($conn->connect_error)
            die("Falha na conexão com o MySQL: " . $conn->connect_error);
        return $conn;
    }
?>