<?php 
    require "connection.php";
    require "filtro.php";
    $conn = conecxao();

    $nome = filtrarEntrada($_POST['nome']);
    $sexo = filtrarEntrada($_POST['sexo']);
    $dt_nascimento = filtrarEntrada($_POST['dt_nascimento']);
    $dt_nascumento = filtrarEntrada($_POST['sexo']);
    $estado_civil = filtrarEntrada($_POST['estado_civil']);
    $cargo = filtrarEntrada($_POST['cargo']);
    $especialidade = filtrarEntrada($_POST['especialidade']);
    $cpf = filtrarEntrada($_POST['cpf']);
    $rg = filtrarEntrada($_POST['rg']);
    $outro = filtrarEntrada($_POST['outro']);

    $cep = filtrarEntrada($_POST['cep']);
    $tipo = filtrarEntrada($_POST['tipo']);
    $logradouro = filtrarEntrada($_POST['logradouro']);
    $numero = filtrarEntrada($_POST['numero']);
    $complemento = filtrarEntrada($_POST['complemento']);
    $bairro = filtrarEntrada($_POST['bairro']);
    $cidade = filtrarEntrada($_POST['cidade']);
    $estado = filtrarEntrada($_POST['estado']);

    $stmt = $conn->prepare("INSERT INTO funcionario(nome, dt_nascimento, especialidade, sexo, estado_civil, cargo, cpf, rg, outro) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssss",$nome, $dt_nascimento, $especialidade, $sexo, $estado_civil, $cargo, $cpf, $rg, $outro);

    $stmt->execute();
    $stmt = $conn->prepare("SELECT MAX(id) FROM funcionario");
    $stmt->bind_result($id);
    $stmt = $conn->prepare("INSERT INTO enderecofunc(logradouro, tipo, numero, complemento, bairro, cidade, estado, cep, funcionario_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissssss", $logradourom, $tipo, $numero, $complemento, $bairro, $cidade, $estado, $cep, $id);

    $stmt->execute();

?>