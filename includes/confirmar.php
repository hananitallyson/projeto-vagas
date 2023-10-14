<main class="flex flex-col">
    <div class="flex my-1 border-b-2 border-blue-600">
        <h2 class="text-4xl font-bold m-2">Excluir Vaga</h2>
    </div>

    <form action="" method="post">
        <p class="mt-5 text-4xl">
            Você deseja <span class="text-red-600">excluir</span> a vaga <span class="text-blue-600 font-bold"><?=$vaga->titulo?></span>?
        </p>
        <div class="flex justify-end items-center">
            <button type="submit" name="excluir" class="mt-5 focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Excluir</button>
            <a href="index.php">
                <button type="button" class="mt-5 px-5 py-2.5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-blue-600 rounded-lg border-2 border-gray-200 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">Cancelar</button>
            </a>
        </div>
    </form>
</main>