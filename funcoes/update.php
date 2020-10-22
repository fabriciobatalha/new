<?php
    require "../config/conn.php";

    $id = $_POST['idCliente'];
    $nome = $_POST['nomeCliente'];
    $bairro = $_POST['bairroCliente'];

    if (!empty($id) && !empty($nome) && !empty($bairro)) {
        $atualizarCliente = getConn()->prepare("UPDATE cliente SET nome='$nome', bairro='$bairro' WHERE id='$id'");

        if ($atualizarCliente->execute())
            echo "<script> alert('Cliente atualizado com sucesso!'); location='../index.php'; </script>";
        else
            echo "<script> alert('Erro! Tente novamente!'); location='../editar.php?id=$id'; </script>";
    } else
        echo "<script> alert('Erro! Preencha todos os campos!'); location='../editar.php?id=$id'; </script>";
?>