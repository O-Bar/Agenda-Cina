<?php
include_once('../modelo/vacina.php');
include_once('../modelo/vacinaDAO.php');

$vacinaDAO = new VacinaDAO();

if (isset($_POST['salvar'])) {
    $vacinaDAO->inserir(
        $_POST['vacina'], 
        $_POST['ubs'], 
        $_POST['data'], 
        $_POST['hora']);
}

if (isset($_POST['bt_listar'])) {
    $vacinaDAO->listar();
}

if (isset($_POST['bt_consultar'])) {
    $vacinaDAO->buscarVacina($_POST['vacina']);
}

if (isset($_POST['botao_excluir'])) {
    $vacinaDAO->excluir($_POST['id']);
}

if (isset($_POST['botao_editar'])) {
    $vacinaDAO->editar($_POST['id']);
}

if (isset($_POST['salvar_alteracao'])) {
    $vacinaDAO->SalvarEdicao(
        $_POST['id'],
        $_POST['vacina'], 
        $_POST['ubs'], 
        $_POST['data'], 
        $_POST['hora']
    );
    $vacinaDAO->listar(); //direciona para a lista
}