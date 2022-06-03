<!doctype html>
<html lang="pt-br">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../images/escudo-removebg-preview.png" />
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>AgendaCina Login</title>

</head>

<body>

    <div class="container">
        <div class="container-login">
            <div class="wrap-login">
                <form class="login-form" method="post" action="../controle/controleLogin.php">

                    <span class="login-form-title">
                        Faça o login
                    </span>

                    <div class="wrap-input margin-top-35 margin-bottom-35">
                        <input class="input-form" type="text" name="email" autocomplete="off">
                        <span class="focus-input-form" data-placeholder="E-mail"></span>
                    </div>

                    <div class="wrap-input margin-bottom-35">
                        <input class="input-form" type="password" name="senha">
                        <span class="focus-input-form" data-placeholder="Senha"></span>
                    </div>
                    <div class="container-login-form-btn">
                        <div class="col">
                            <input type="submit" name="entrar" value="Entrar" class="login-form-btn">
                        </div>
                    </div>

                </form>
            </div>
                <img src="../images/logo.png" width="400" height="400" class="margin-left-50"/>
        </div>
    </div>
    <script src="/scripts/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>