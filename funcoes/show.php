<?php
    require "config/conn.php";

    $listarClientes = getConn()->prepare("SELECT * FROM cliente ORDER BY id DESC");
    $listarClientes->execute();
    $contarClientes = $listarClientes->rowCount();
?>