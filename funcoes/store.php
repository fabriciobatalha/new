<?php
    require "../config/conn.php";

    $nome = $_POST['nomeCliente'];
    $bairro = $_POST['bairroCliente'];

    if (!empty($nome) && !empty($bairro)) {
        $cadastrarCliente = getConn()->prepare("INSERT INTO cliente (nome, bairro) VALUES ('$nome', '$bairro')");

        if ($cadastrarCliente->execute())
            echo "<script> alert('Cliente cadastrado com sucesso!'); location='../index.php'; </script>";
        else
            echo "<script> alert('Erro! Tente novamente!'); location='../cadastrar.php'; </script>";
    } else
        echo "<script> alert('Erro! Preencha todos os campos!'); location='../cadastrar.php'; </script>";
?>