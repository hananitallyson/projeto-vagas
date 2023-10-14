<?php

    $mensagem = '';
    if (isset($_GET['status'])) {
        switch ($_GET['status']) {
            case 'success':
                $mensagem = '<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert"><span class="font-medium">Ação efetuada com sucesso!</span></div>';
            break;
            case 'error':
                $mensagem = '<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert"><span class="font-medium">Ação não executada!</span></div>';
            break;
        }
    }

    $resultados = '';
    foreach ($vagas as $vaga) {
        $resultados .= '</tr>
                            <td scope="row" class="border-b-2 border-gray-200 bg-white px-6 py-4 font-medium text-gray-900 whitespace-nowrap">'. $vaga->id .'</td>
                            <td scope="row" class="border-b-2 border-gray-200 bg-white px-6 py-4 font-medium text-gray-900 whitespace-nowrap">'. $vaga->titulo .'</td>
                            <td scope="row" class="border-b-2 border-gray-200 bg-white px-6 py-4 font-medium text-gray-900 whitespace-nowrap">'. $vaga->descricao .'</td>
                            <td scope="row" class="border-b-2 border-gray-200 bg-white px-6 py-4 font-medium text-gray-900 whitespace-nowrap">'. ($vaga->ativo == 1 ? 'Ativo' : 'Inativo') .'</td>
                            <td scope="row" class="border-b-2 border-gray-200 bg-white px-6 py-4 font-medium text-gray-900 whitespace-nowrap">'. date('d/m/Y à\s H:i:s', strtotime($vaga->data)) .'</td>
                            <td scope="row" class="border-b-2 border-gray-200 bg-white px-6 py-4 font-medium text-gray-900 whitespace-nowrap"><a href="editar.php?id='. $vaga->id .'"><button type="button" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Editar</button>
                            <a href="excluir.php?id='. $vaga->id .'"><button type="button" class="focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Excluir</button></td>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr><td colspan=6 class="border-b-2 text-center border-gray-200 bg-white px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Não há vagas registradas ainda!</td>' ;

?>

<main class="flex justify-center items-center flex-col">

    <?=$mensagem?>

    <section>
        <a href="cadastrar.php">
            <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-blue-600 rounded-lg border-2 border-gray-200 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">Cadastrar nova vaga</button>
        </a>
    </section>

    <section> 
        <table class="w-full text-sm text-left text-gray-500 my-5">
            <thead class="text-xs text-gray-700 uppercase bg-white border-b-2 border-blue-600">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Título</th>
                    <th scope="col" class="px-6 py-3">Descrição</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Data</th>
                    <th scope="col" class="px-6 py-3">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>
</main>