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
            <h1 class="text-info">O que você pagou hoje?</h1>
            <h4>Descreva abaixo a conta que você pagou hoje.</h4>

            <hr class="bg-info" />

            <form>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="data_pagamento">Data do Pagamento</label>
                        <input required type="date" class="form-control" id="data_pagamento" name="data_pagamento" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="integrante">Integrante</label>
                        <select required id="integrante" name="integrante" class="form-control">
                            <option value="" selected>Selecione...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="categoria">Categoria</label>
                        <select required id="categoria" name="categoria" class="form-control">
                            <option value="" selected>Selecione...</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="valor">Valor (R$)</label>
                        <input required type="number" step="0.01" min="0.01" class="form-control" id="valor" name="valor" placeholder="Valor" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="obs">Observação</label>
                        <input required type="text" class="form-control" id="obs" name="obs" placeholder="Observação" />
                    </div>
                </div>
                <button type="submit" class="btn btn-info w-100">Registrar</button>
            </form>
        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/910e6444fa.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>