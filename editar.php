<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar Vaga');

use \App\Entity\Vaga;

if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('localtion: index.php?status=error');
    exit;
}

$vaga = Vaga::getVaga($_GET['id']);

if (!$vaga instanceof Vaga) {
    header('localtion: index.php?status=error');
    exit;
}

if ($_POST['titulo'] != null && $_POST['descricao'] != null && $_POST['ativo'] != null) {
    $vaga->titulo = $_POST['titulo'];
    $vaga->descricao = $_POST['descricao'];
    $vaga->ativo = $_POST['ativo'];
    $vaga->atualizar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';

include __DIR__ . '/includes/forms.php';

include __DIR__ . '/includes/footer.php';