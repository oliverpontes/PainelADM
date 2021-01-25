<?php

include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);



if ($pg) {
    //existe

    switch ($_GET['pg']) {

        case 'inicial':

            include_once 'site/inicio.php';
            break;

        case 'login':

            include_once 'painel/paginas/acesso/login.php';
            break;

        case 'dashboard':
            //Página inicial do Painel ADM

            if (verificaLogin()) {
                include_once 'painel/paginas/includes/header.php';
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/dashboard.php';
                include_once 'painel/paginas/includes/footer.php';
            } else {
                echo 'Login ou senha inválidos.';
            }
            break;

        default:
            include_once 'painel/paginas/dashboard.php';
            break;
    }
} else {
    //não existe
    include_once 'painel/paginas/dashboard.php';
}

