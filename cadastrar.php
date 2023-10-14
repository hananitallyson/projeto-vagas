<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Vaga');

use \App\Entity\Vaga;

if ($_POST['titulo'] != null && $_POST['descricao'] != null && $_POST['ativo'] != null) {
    $vaga = new Vaga;
    $vaga->titulo = $_POST['titulo'];
    $vaga->descricao = $_POST['descricao'];
    $vaga->ativo = $_POST['ativo'];

    $vaga->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';

include __DIR__ . '/includes/forms.php';

include __DIR__ . '/includes/footer.php';