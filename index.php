<?php
    include "funcoes/show.php";
?>

<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Página Inicial | CRUD </title>
        <link rel="stylesheet" href="_css/bootstrap.min.css">
    </head>

    <body class="bg-light">
        <section>
            <div class="container">
                <h1 class="text-secondary display-4 mt-5"> Página Inicial </h1>

                <div class="text-center text-md-left my-5">
                    <a href="cadastrar.php" class="btn btn-outline-success"> Cadastrar </a>
                </div>

                <div class="row">
                    <?php 
                        if ($contarClientes > 0) {
                            foreach ($listarClientes as $dado) { 
                    ?>

                    <div class="col-12 col-md-3 mb-5">
                        <div class="p-3 shadow rounded bg-dark">
                            <p class="text-white"> Nome: <?php echo $dado['nome']; ?> </p>
                            <p class="text-white"> Bairro: <?php echo $dado['bairro']; ?> </p>

                            <div class="row px-3">
                                <a href="editar.php?id=<?php echo $dado['id']; ?>" class="col-5 btn btn-success"> Editar </a>
                                <div class="col my-3"></div>
                                <a href="funcoes/destroy.php?id=<?php echo $dado['id']; ?>" class="col-5 btn btn-danger" onclick="return confirm('Você realmente deseja excluir este cliente?')"> Excluir </a>
                            </div>
                        </div>
                    </div>

                    <?php
                            }
                        } else {
                    ?>
                    
                    <div class="alert alert-danger col-12" role="alert">
                        Não há clientes cadastrados!
                    </div>

                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>