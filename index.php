<?php

require __DIR__ . '/vendor/autoload.php';

use App\Entity\Vaga;

$vagas = Vaga::getVagas();

header("Refresh: 10; url=index.php");

include __DIR__ . '/includes/header.php';

include __DIR__ . '/includes/listagem.php';

include __DIR__ . '/includes/footer.php';