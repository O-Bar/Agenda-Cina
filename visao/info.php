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
                    <p class="card-text">
                    <b>Vacina Influenza sazonal trivalente (fragmentada e inativada)</b> <br>
                    A vacina Influenza do Butantan protege contra os três tipos de vírus Influenza mais prevalecentes e sua composição é 
                    alterada anualmente, devido à alta taxa de mutação do vírus. É produzida a partir da inoculação do vírus em ovos embrionados 
                    de galinhas. Após um período de incubação, o líquido alantóico que envolve o embrião é colhido, centrifugado, concentrado, 
                    fragmentado e inativado, originando uma suspensão da vacina monovalente. A mistura das suspensões de cada monovalente resulta 
                    assim na vacina trivalente. <br>
                    <b>Vacina adsorvida hepatite A (inativada)</b> <br>
                    A vacina adsorvida hepatite A (inativada) é indicada para vacinação contra a infecção causada pelo vírus da hepatite A. 
                    É produzida a partir de um vírus hepatite A, propagado em cultura de células humanas, em seguida purificada e inativada.  <br>
                    <b>Vacina adsorvida hepatite B (recombinante)</b> <br>
                    É utilizada para prevenção da infecção provocada pelo vírus da hepatite B, sendo produzida a partir de leveduras recombinantes 
                    Pichia angusta (H.polymorpha) que expressam o antígeno de superfície do vírus da Hepatite B. A vacina do Butantan é a única vacina 
                    recombinante para uso humano totalmente desenvolvida e produzida no Brasil. <br>
                    <b>Vacina papilomavírus humano tipo, 6, 11,16 e 18 (recombinante)</b><br>
                    A vacina papiloma vírus humano tipo 6, 11, 16 e 18 (recombinante) é indicada para a vacinação contra a infecção causada pelo vírus 
                    do papiloma humano (HPV), responsável pela ocorrência de câncer genital tanto em mulheres como em homens. As proteínas virais do HPV 
                    tipos 6, 11, 16 e 18 são produzidas separadamente em leveduras Saccharomyces cerevisiae, para serem formuladas em uma única dose quadrivalente. <br>
                    <b>Vacina Raiva (inativada)</b> <br>
                    A vacina da raiva é indicada na profilaxia da raiva humana, quando há necessidade de proteger indivíduos expostos ao vírus da doença em decorrência 
                    do contato com a saliva de animais transmissores ou como profilaxia em pessoas com exposição ocupacional ao risco da infeção pelo vírus. A vacina do 
                    Butantan é produzida em uma linhagem celular (células VERO), sem a utilização de componentes de origem animal, e apresenta um alto grau de pureza e 
                    uma eficiente resposta imunológica. <br>
                    <b>Vacina DTP, DT e dT </b> <br>
                    Para a produção da vacina tríplice bacteriana (DTP), são fabricadas separadamente a vacina de células inteiras da Bordetella pertussis, agente causador 
                    da coqueluche, combinada com os toxóides tetânico e diftérico, resultantes da fermentação bactérias Corynebacterium diphtheriae e do Clostridium tetani 
                    para obtenção das toxinas e posterior detoxificação.
                    A composição do toxóide tetânico com o toxóide diftérico dá origem à vacina dupla adulto (dT) e à vacina dupla infantil (DT). <br>
                    <b> Vacina DTPa</b> <br>
                    Indicada para crianças menores de sete anos, que apresentaram eventos adversos que contraindicam outra dose da vacina DTP de células inteiras, e em 
                    gestantes como reforço ou complementação do esquema da vacina dupla adulta (difteria e tétano), com o objetivo de diminuir a mortalidade de coqueluche 
                    em recém-nascidos. É uma vacina constituída por partes altamente purificadas de Bordetella pertussis, combinadas com os toxóides diftérico e tetânico. </br> 
                    </p>
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