<?php
    require "config/conn.php";

    $id = $_GET['id'];
    $pegarCliente = getConn()->prepare("SELECT * FROM cliente WHERE id='$id'");
    $pegarCliente->execute();
?>

<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Editar | CRUD </title>
        <link rel="stylesheet" href="_css/bootstrap.min.css">
    </head>

    <body class="bg-light">
        <section>
            <div class="container">
                <h1 class="text-secondary display-4 mt-5"> Editar </h1>

                <div class="text-center text-md-left my-5">
                    <a href="index.php" class="btn btn-outline-success"> Voltar </a>
                </div>

                <div class="row">
                    <div class="col"></div>

                    <form action="funcoes/update.php" method="post" class="col-12 col-md-4 shadow py-5">
                        <?php foreach ($pegarCliente as $dado) { ?>
                        
                        <input type="hidden" id="idCliente" name="idCliente" value="<?php echo $dado['id']; ?>">
                        <input type="text" name="nomeCliente" id="nomeCliente" class="input-group-text w-100 mb-2" value="<?php echo $dado['nome'];?>" placeholder="Nome" required>
                        <input type="text" name="bairroCliente" id="bairroCliente" class="input-group-text w-100 mb-3" value="<?php echo $dado['bairro'];?>" placeholder="Bairro" required>

                        <?php } ?>
                        <input type="submit" class="btn btn-success w-100" value="Editar">
                    </form>

                    <div class="col"></div>
                </div>
            </div>
        </section>
    </body>
</html>