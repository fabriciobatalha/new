<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cadastrar | CRUD </title>
        <link rel="stylesheet" href="_css/bootstrap.min.css">
    </head>

    <body class="bg-light">
        <section>
            <div class="container">
                <h1 class="text-secondary display-4 mt-5"> Cadastrar </h1>

                <div class="text-center text-md-left my-5">
                    <a href="index.php" class="btn btn-outline-success"> Voltar </a>
                </div>

                <div class="row">
                    <div class="col"></div>

                    <form action="funcoes/store.php" method="post" class="col-12 col-md-4 shadow py-5">
                        <input type="text" name="nomeCliente" id="nomeCliente" class="input-group-text w-100 mb-2" placeholder="Nome" required>
                        <input type="text" name="bairroCliente" id="bairroCliente" class="input-group-text w-100 mb-3" placeholder="Bairro" required>
                        <input type="submit" class="btn btn-success w-100" value="Cadastrar">
                    </form>

                    <div class="col"></div>
                </div>
            </div>
        </section>
    </body>
</html>