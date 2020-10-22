<?php
    require "../config/conn.php";

    $id = $_GET['id'];
    $excluirCliente = getConn()->prepare("DELETE FROM cliente WHERE id='$id'");

    if ($excluirCliente->execute())
        echo "<script> alert('Cliente excluído com sucesso!'); location='../index.php'; </script>";
    else
        echo "<script> alert('Erro! Tente novamente!'); location='../index.php'; </script>";
?>