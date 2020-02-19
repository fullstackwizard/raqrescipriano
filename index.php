<?php 

require_once('./modules/api.php');

?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consumindo API Reqres</title>
        <link rel="stylesheet" href="build/tailwind.css">
    </head>

    <body>
        <!-- Menu topo do projeto -->
        <nav class="flex items-center justify-between flex-wrap bg-purple-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">Sistema Cipriano v1.0</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow"></div>
                <div>
                    <a href="ttps://github.com/death2k" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Github</a>
                </div>
            </div>
        </nav>

        <!-- Lista de Itens consumidos da API -->
        <div class="flex flex-wrap items-stretch mb-2 md:px-3 bg-gr">
            <?php foreach ($lists as $list): ?>
                <div class="w-1/2 lg:w-1/4 mb-4 md:mb-6 pb-0 p-2" data-twcat="HTML">
                    <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="sm:flex sm:items-center px-6 py-4">
                            <img class="block mx-auto sm:mx-0 sm:flex-shrink-0 h-16 sm:h-24 rounded-full" src="<?= $list['avatar']?>" alt="Woman's Face">
                            <div class="mt-4 sm:mt-0 sm:ml-4 text-center sm:text-left">
                                <p class="text-xl leading-tight">
                                    <?= $list['first_name']?>
                                        <?= $list['last_name']?>
                                </p>
                                <p class="text-sm leading-tight text-gray-600">
                                    <?= $list['email']?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
             <?php endforeach; ?>
        </div>

        <footer class="bg-purple-500 text-gray-100 px-2 pt-0 pb-2 mt-0">
            <div class="container mx-auto py-8">
                <div class="flex flex-wrap mb-2 px-4">
                    <div class="w-full md:w-1/3 text-center md:text-left px-3 mb-2 md:mb-0 pb-3 sm:pb-0">
                        <p class="text-white font-bold text-xl my-3">API Consumer { reqres.in }</p>
                    </div>
                    <div class="w-full md:w-1/3 text-center md:text-left px-3 sm:px-1 mb-2 md:mb-0 pb-3 sm:pb-0">
                    </div>
                    <div class="w-full md:w-1/3 text-center md:text-left px-3 sm:px-1 mb-2 md:mb-0 pb-3 sm:pb-0">
                        <p><a class="footerlink" href="https://github.com/death2k"> Flávio Ribeiro</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </body>

    </html>