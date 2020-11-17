 

<?php

include_once "app\paineladm\helpers\helperadm.php";

session_start();

$pg = 'cpanel';

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
}

if (isset($_SESSION['usuario'])) {
    switch ($pg) {
        case 'cpanel':
            include_once "app/paineladm/paginas/includes/header.php";
            include_once "app/paineladm/paginas/includes/navegaçao.php";
            include_once "app/paineladm/paginas/inicial.php";
            include_once "app/paineladm/paginas/includes/footer.php";
            break;
        case 'contato':
            include_once "app/site/paginas/contato.php";
            break;
        case 'produtos':
            "app/site/paginas/produtos.php";
            break;

        case 'sair';
            session_destroy();
            header('Location' . $_SERVER['PHP_SELF']);
            break;

        default:
            include_once "app/paineladm/paginas/includes/header.php";
            include_once "app/paineladm/paginas/includes/navegaçao.php";
            include_once "app/paineladm/paginas/inicial.php";
            include_once "app/paineladm/paginas/includes/footer.php";
            break;
    }
} else {
    //   verifica se foi submetido algum metodo POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (verificalogin()) {
            include_once "app/paineladm/paginas/includes/header.php";
            include_once "app/paineladm/paginas/includes/navegaçao.php";
            include_once "app/paineladm/paginas/inicial.php";
            include_once "app/paineladm/paginas/includes/footer.php";
        }
    } else {
        include_once 'app/paineladm/paginas/login.php';
    }
}










// if (!isset($_SESSION['usuario'])) {
//     $usuario = "edvan@hotmail.com";
//     $senha = '123456';

// session_start();
// $_SESSION['usuario']=$usuario; 
// $_SESSION['email']=$senha; 

// switch ($_GET['pg']) {
//     case 'cpanel':
//     include_once "app/paineladm/index.php";
//         break;
    
//     case 'login':
//         include_once "app/paineladm/paginas/login.php";
//         break;
    
    
    
// }


// } else {
//     include_once "app/paineladm/paginas/login.php";
//   } 