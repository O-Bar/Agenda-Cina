<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../images/escudo-removebg-preview.png" />
    <link rel="stylesheet" type="text/css" href="../visao/editar.css">
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

    <article id="formulario">
        <h1>Realize o agendamento</h1><br>
        <form class="login-form" method="post" action="../controle/controle_vacina.php">
            <div class="row">
                <div class="col-12 col-sm-12 d-flex justify-content-center">
                    <label class="input-form" for="vacina">Qual vacina deseja agendar?</label>
                    <select class="input-form" name="vacina" id="vacina" onsubmit="update()">
                        <option value="nenhuma">Selecione a vacina</option>
                        <option value="BCG">BCG</option>
                        <option value="Hepatite B">Hepatite B</option>
                        <option value="Tríplice bacteriana">Tríplice bacteriana</option>
                        <option value="Poliomielite">Poliomielite</option>
                        <option value="Rotavírus">Rotavírus</option>
                        <option value="Tríplice viral">Tríplice viral</option>
                        <option value="Dengue">Dengue</option>
                        <option value="Dengue">Influenza</option>
                        <option value="Covid 19">Covid 19</option>
                    </select> <br>
                </div>
                <div class="col-12 col-sm-12 d-flex justify-content-center">
                    <label class="input-form" for="ubs">Selecione a UBS mais próxima</label>
                    <select class="input-form" name="ubs" id="ubs" onsubmit="update()">
                        <option value="nenhuma">Selecione a UBS</option>
                        <option value="Se">UBS Sé</option>
                        <option value="Humaita">UBS Humaitá</option>
                        <option value="Indianopolis">UBS Indianópolis</option>
                        <option value="Cambuci">UBS Cambuci</option>
                        <option value="VilaPrudente">UBS Vila Prudente</option>
                    </select> <br>
                </div>
                <div class="col-12 col-sm-12 d-flex justify-content-center">
                    <label class="input-form" for="data">Escolha a data</label>
                    <input class="input-form" type="date" name="data" id="data" min="2021-12-10">
                    <br>
                </div>
                <div class="col-12 col-sm-12 d-flex justify-content-center">
                    <label class="input-form" for="hora">Escolha o horário (aberto das 08:00 às 17:00):</label>
                    <input class="input-form" type="time" id="hora" name="hora" min="08:00" max="17:00" required > <br><br>
                </div>

                <div class="col-12 col-sm-12 d-flex justify-content-center">
                <input class="agend-form-btn" type="submit" name="salvar" value="Agendar">
    
                </div>
            </div>
            <br><br>
        </form>
    </article>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>