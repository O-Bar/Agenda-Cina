<?php
class vacinaDAO
{
    function inserir($vacina, $ubs, $data, $hora)
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=AgendaCina', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('INSERT INTO vacina (vacina, ubs, data, hora) VALUES(:vacina, :ubs, :data, :hora)');
            $stmt->execute(array(
                ':vacina' => "$vacina", ':ubs' => "$ubs", ':data' => "$data", ':hora' => "$hora"
            ));
            echo "<script>alert('Cadastrado com sucesso!');
            window.location = '../visao/agendamento.php';
            </script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function inserir2($id, $vacina, $ubs, $data, $hora)
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=AgendaCina', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $inserir = $pdo->prepare("INSERT INTO vacina (vacina, ubs, data, hora) VALUES('$vacina, '$ubs',' $data', '$hora')");
            $inserir->execute();

            echo "<script>alert('Cadastrado com sucesso!');
            window.location = '../visao/agendamento.php';
            </script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function listar()
    {

        $pdo = new PDO("mysql:host=localhost;dbname=AgendaCina", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT id, vacina, ubs, data, hora FROM vacina");
        echo " <!doctype html>";
        echo "<html lang='pt-br'>";
        echo "<head>";
        echo " <meta charset='utf-8'>";
        echo " <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
        echo "<title>AgendaCina</title>";
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css'>";
        echo "<link rel='icon' type='image/png' href='../images/escudo-removebg-preview.png'>";
        echo "</head>";
        echo "<body class='container'>";
        echo "<h2>Lista de agendamentos</h2>";
        echo "<table class='table table-striped mt-3'>";
        echo "<tr>
          <th>Id</th>
          <th>Vacina</th>
          <th>Ubs</th>
          <th>Data</th>
          <th>Hora</th>
          <th>Ações</th>
          </tr>";
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['vacina'] . "</td>";
            echo "<td>" . $linha['ubs'] . "</td>";
            echo "<td>" . $linha['data'] . "</td>";
            echo "<td>" . $linha['hora'] . "</td>";
            echo "<td> <form method='post' action='../controle/controle_vacina.php'> "
                . "<input class='btn btn-outline-primary mr-3' type='submit' name='botao_editar' value='Editar'>"
                . "<input class='btn btn-outline-danger' type='submit' name='botao_excluir' value='Excluir'>"
                . " <input type='hidden' name='id' value = '" . $linha['id'] . "'/></form> </td>";
            echo "</tr>";
        }
        echo " </table>";
        echo "<form action='../controle/controle_vacina.php' method='POST'>";
        echo "<div class='form-group form-check-inline'>";
        echo "<div class='col'>";
        echo "<a href='../visao/consulta.php' class='btn btn-primary mr-3' role='button' aria-pressed='true'>Voltar</a>";
        echo "<a href='../visao/agendamento.php' class='btn btn-success mr-3' role='button' aria-pressed='true'>Novo agendamento</a>";
        echo "</div></div></form>";
        echo "</body></html>";
    }

    function buscarVacina($vacina)
    {
        $pdo  = new PDO("mysql:host=localhost;dbname=AgendaCina", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT id, vacina, ubs, data, hora FROM vacina WHERE vacina = '$vacina'");
        $total_retornado = $consulta->rowCount();


        if ($total_retornado  === 0) {
            echo
            "<script>alert('não econtrado');" .
                " window.location = '../visao/consulta.php';</script>";
        } else {
            echo " <!doctype html>";
            echo "<html lang='pt-br'>";
            echo "<head>";
            echo " <meta charset='utf-8'>";
            echo " <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
            echo "<title>AgendaCina</title>";
            echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css'>";
            echo "<link rel='icon' type='image/png' href='../images/escudo-removebg-preview.png'>";
            echo "</head>";
            echo "<body class='container'>";
            echo "<h2>Lista de agendamentos</h2>";
            echo "<table class='table table-striped mt-3'>";
            echo "<tr>
              <th>Vacina</th>
              <th>Ubs</th>
              <th>Data</th>
              <th>Hora</th>
              <th>Ações</th>
              </tr>";
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $vacina = new Vacina($linha['id'], $linha['vacina'], $linha['ubs'], $linha['data'], $linha['hora']);
                echo "<td>" . $vacina->getVacina() . "</td>";
                echo "<td>" . $vacina->getUbs() . "</td>";
                echo "<td>" . $vacina->getData() . "</td>";
                echo "<td>" . $vacina->getHora() . "</td>";
                echo "<td> <form method='post' action='../controle/controle_vacina.php'> "
                    . "<input class='btn btn-outline-primary mr-3' type='submit' name='botao_editar' value='Editar'>"
                    . "<input class='btn btn-outline-danger' type='submit' name='botao_excluir' value='Excluir'>"
                    . " <input type='hidden' name='id' value = '" . $linha['id'] . "'/></form> </td>";
                echo "</tr>";
            }
            echo " </table>";
            echo "<form action='../controle/controle_vacina.php' method='POST'>";
            echo "<div class='form-group form-check-inline'>";
            echo "<div class='col'>";
            echo "<a href='../visao/consulta.php' class='btn btn-primary mr-3' role='button' aria-pressed='true'>Voltar</a>";
            echo "<a href='../visao/agendamento.php' class='btn btn-success mr-3' role='button' aria-pressed='true'>Novo agendamento</a>";
            echo "</div></div></form>";
            echo "</body></html>";
        }
    }



    function excluir($id)
    {
        try {
            $pdo  = new PDO("mysql:host=localhost;dbname=AgendaCina", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $delete =  $pdo->prepare("DELETE FROM vacina WHERE id = '$id'");
            $delete->execute();

            echo "<script>alert('" .  $delete->rowCount() .
                " Agendamento deletado com sucesso!');" .
                " window.location = '../visao/consulta.php';</script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function Editar($id)
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=AgendaCina", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $pdo->query("SELECT id, vacina, ubs, data, hora FROM vacina WHERE id = '$id'");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                session_start();
                include_once("../modelo/cvacina.php");
                $vacina = new Vacina($linha['id'], $linha['vacina'], $linha['ubs'], $linha['data'], $linha['hora']);
                $_SESSION['obj_vacina'] = serialize($vacina);
                header("location:../visao/editar.php");
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function SalvarEdicao($id, $vacina, $ubs, $data, $hora)
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=AgendaCina", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $editar = $pdo->query("UPDATE vacina SET vacina ='$vacina', ubs='$ubs', data ='$data', hora ='$hora' WHERE id 
       = '$id'");
            $editar->execute();
            echo "<script>alert('Alterado com sucesso!');</script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
