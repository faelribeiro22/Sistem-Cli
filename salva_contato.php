<?php

    require "connection.php";
    require "filtro.php";
    $conn = conecxao();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $motivo = $_POST['motivo'];

    $nome = filtrarEntrada($nome);
    $email = filtrarEntrada($email);
    $mensagem = filtrarEntrada($mensagem);

    $stmt = $conn->prepare("INSERT INTO contato(nome, email, mensagem, motivo) VALUES(?, ?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $mensagem, $motivo);

    $stmt->execute();

?>