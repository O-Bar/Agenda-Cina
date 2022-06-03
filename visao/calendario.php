<!doctype html>
<html lang="pt-br">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../images/escudo-removebg-preview.png" />
    <link rel="stylesheet" type="text/css" href="info.css">
    <title>AgendaCina</title>

</head>

<body>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/vacina.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active "><a class="nav-link" href="../visao/principal.php"> Página inicial</a></li>
                    <li class="nav-item"><a class="nav-link" href="../visao/agendamento.php">Agende aqui</a></li>
                    <li class="nav-item"><a class="nav-link" href="../visao/consulta.php">Consulte seus agendamentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="../visao/calendario.php">Calendário Vacinal</a></li>
                    <li class="nav-item"><a class="nav-link" href="../visao/info.php">Informações</a></li>
                    <li>
                        <form method="post" action="../controle/controleLogin.php">
                            <input type="submit" name="sair" value="Sair" class='btn btn-danger'>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <article id="conteudo text-center">
        <div class="row">
            <div class="col-12 col-md-10 text-center mx-auto">
                <div class="card">
                    <div class="card-body">
                        <img src="../images/vacinação.jpeg" class="d-block w-100" alt="...">
                    </div>

                </div>
            </div>
        </div>
    </article>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>