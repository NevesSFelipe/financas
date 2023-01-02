<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>FSN | Finanças</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Finanças</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="integrantes.php">Integrantes</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Navbar text with an inline element
                </span>
            </div>
        </nav>

        <div class="container mt-3 mb-3">
            <h1 class="text-info"><span id="nome-integrante"></span> / <span id="mes"></span></h1>

            <hr class="bg-info" />

            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="card-title text-success">
                                <i class="fa-solid fa-plus"></i>
                                Entradas
                            </h1>
                            <h3 class="card-text">R$ 250.00</h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="card-title text-danger">
                                <i class="fa-solid fa-minus"></i>
                                Saídas
                            </h1>
                            <h3 class="card-text">R$ 50.00</h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="card-title text-warning">
                                <i class="fa-solid fa-not-equal"></i>
                                Saldo
                            </h1>
                            <h3 class="card-text">R$ 200.00</h3>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table mt-3 text-center table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">01/01/2023</th>
                        <td>Aluguel</td>
                        <td>R$ 250.00</td>
                        <td><i class="fa-solid fa-arrow-trend-up text-success"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">01/01/2023</th>
                        <td>Aluguel</td>
                        <td>R$ 250.00</td>
                        <td><i class="fa-solid fa-arrow-trend-down text-danger"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/910e6444fa.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>