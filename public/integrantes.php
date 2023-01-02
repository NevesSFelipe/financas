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
            <h1 class="text-info">Integrantes</h1>
            <h4>Selecione o integrante para verificar os gastos.</h4>

            <hr class="bg-info" />

            <div class="card-deck">
                <div class="card">
                    <img src="assets/img/casa.png" class="card-img-top w-100 h-50" alt="Casa" />
                    <div class="card-body">
                        <h4 class="card-title text-info text-center"><strong>Casa</strong></h4>
                        <ul class="list-group text-center">
                            <li class="list-group mt-2">Água</li>
                            <li class="list-group mt-2">Aluguel</li>
                            <li class="list-group mt-2">Gás</li>
                            <li class="list-group mt-2">Luz</li>
                            <li class="list-group mt-2">Manutenção</li>
                            <li class="list-group mt-2">Mercado</li>
                            <li class="list-group mt-2">NET + TV</li>
                            <li class="list-group mt-2">Romeu</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="form-group">
                                <input type="text" hidden class="form-control" id="integrante_casa" value="Casa" />
                            </div>
                            <button type="button" id="btn_acessar_casa" class="btn btn-info w-100 mb-3">Acessar</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/homem.png" class="card-img-top w-100 h-50" alt="Felipe" />
                    <div class="card-body">
                        <h4 class="card-title text-info text-center"><strong>Felipe</strong></h4>
                        <ul class="list-group text-center">
                            <li class="list-group mt-2">Casa</li>
                            <li class="list-group mt-2">Celular</li>
                            <li class="list-group mt-2">Cursos</li>
                            <li class="list-group mt-2">Diversão</li>
                            <li class="list-group mt-2">Dívidas / Impréstimos</li>
                            <li class="list-group mt-2">Gasolina / Transporte / Uber</li>
                            <li class="list-group mt-2">Higiene Pessoal</li>
                            <li class="list-group mt-2">Reserva de Emergência</li>
                            <li class="list-group mt-2">Taxas / Juros</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="form-group">
                                <input type="text" hidden class="form-control" id="integrante_felipe" value="Felipe" />
                            </div>
                            <button type="button" id="btn_acessar_felipe" class="btn btn-info w-100 mb-3">Acessar</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/img/vo.png" class="card-img-top w-100 h-50" alt="Geraldo" />
                    <div class="card-body">
                        <h4 class="card-title text-info text-center"><strong>Geraldo</strong></h4>
                        <ul class="list-group text-center">
                            <li class="list-group mt-2">Casa</li>
                            <li class="list-group mt-2">Celular</li>
                            <li class="list-group mt-2">Cigarro</li>
                            <li class="list-group mt-2">Diversão</li>
                            <li class="list-group mt-2">Dívidas / Impréstimos</li>
                            <li class="list-group mt-2">Gasolina / Transporte / Uber</li>
                            <li class="list-group mt-2">Higiene Pessoal</li>
                            <li class="list-group mt-2">Reserva de Emergência</li>
                            <li class="list-group mt-2">Taxas / Juros</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="form-group">
                                <input type="text" hidden class="form-control" id="integrante_geraldo" value="Geraldo" />
                            </div>
                            <button type="button" id="btn_acessar_geraldo" class="btn btn-info w-100 mb-3">Acessar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/910e6444fa.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>