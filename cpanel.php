<?php
include_once "app/painelAdm/helpers/helperAdm.php";

session_start();
//definindo a variavel pg
$pg = 'cpanel';
if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
}
if (isset($_SESSION['usuario'])) {

    switch ($pg) {
        case 'cpanel':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
            break;

            case 'produtos':
                include_once "app/painelAdm/paginas/includes/header.php";
                include_once "app/painelAdm/paginas/includes/navegacao.php";
                include_once "app/painelAdm/paginas/produtos.php";
                include_once "app/painelAdm/paginas/includes/footer.php";
                break;
    
            case 'contato':
                include_once "app/painelAdm/paginas/includes/header.php";
                include_once "app/painelAdm/paginas/includes/navegacao.php";
                include_once "app/painelAdm/paginas/contato.php";
                include_once "app/painelAdm/paginas/includes/footer.php";
                break;
    


        case 'sair';
            session_destroy();
            header('location' . $_SERVER['PHP_SELF']);
            header('Refresh:0');
            break;
        default:
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";


            break;
    }
} else {
    //verifica se foi submetido metodo post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (verificaSeLogado()) {
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/footer.php";
        }
    } else {
        include_once "app/painelAdm/paginas/login.php";
    }
}



// if (!isset($_SESSION['usuario'])){
//     $usuario = 'luizluiz';
//     $senha = 'luiz@site.com';
//     $projeto = 'projeto final';

//     session_start();

//     $_SESSION['usuario'] = $usuario;
//     $_SESSION['email'] = $senha;
//     $_SESSION['projeto'] = $projeto;
//     switch ($_GET['pg']){
//         case 'cpanel':
//             include_once "app/painelAdm/index.php";
//         break;
       
//             case 'login':
//                 include_once "app/painelAdm/index.php";
//             break;

//             default:
//         break;
//     }
// } else {
//     include_once "app/painelAdm/paginas/login.php";
// };
