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
            <h1 class="text-info" id="nome-integrante"></h1>
            <h4>Selecione o mês do filtro.</h4>

            <hr class="bg-info" />

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="janeiro" class="form-control mx-sm-3" hidden value="Janeiro" />
                </div>
                <button type="button" id="btn_janeiro" class="btn btn-info w-100">Janeiro</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="fevereiro" class="form-control mx-sm-3" hidden value="Fevereiro" />
                </div>
                <button type="button" id="btn_fevereiro" class="btn btn-info w-100">Fevereiro</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="marco" class="form-control mx-sm-3" hidden value="Março" />
                </div>
                <button type="button" id="btn_marco" class="btn btn-info w-100">Março</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="abril" class="form-control mx-sm-3" hidden value="Abril" />
                </div>
                <button type="button" id="btn_abril" class="btn btn-info w-100">Abril</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="maio" class="form-control mx-sm-3" hidden value="Maio" />
                </div>
                <button type="button" id="btn_maio" class="btn btn-info w-100">Maio</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="junho" class="form-control mx-sm-3" hidden value="Junho" />
                </div>
                <button type="button" id="btn_junho" class="btn btn-info w-100">Junho</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="julho" class="form-control mx-sm-3" hidden value="Julho" />
                </div>
                <button type="button" id="btn_julho" class="btn btn-info w-100">Julho</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="agosto" class="form-control mx-sm-3" hidden value="Agosto" />
                </div>
                <button type="button" id="btn_agosto" class="btn btn-info w-100">Agosto</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="setembro" class="form-control mx-sm-3" hidden value="Setembro" />
                </div>
                <button type="button" id="btn_setembro" class="btn btn-info w-100">Setembro</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="outubro" class="form-control mx-sm-3" hidden value="Outubro" />
                </div>
                <button type="button" id="btn_outubro" class="btn btn-info w-100">Outubro</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="novembro" class="form-control mx-sm-3" hidden value="Novembro" />
                </div>
                <button type="button" id="btn_novembro" class="btn btn-info w-100">Novembro</button>
            </form>

            <form class="form-inline mb-2">
                <div class="form-group">
                    <input type="text" id="dezembro" class="form-control mx-sm-3" hidden value="Dezembro" />
                </div>
                <button type="button" id="btn_dezembro" class="btn btn-info w-100">Dezembro</button>
            </form>

            
        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/910e6444fa.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>