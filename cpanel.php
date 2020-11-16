 

<?php


session_start();

$pg='cpanel';

if (isset($_GET['pg'])) {
    $pg=$_GET['pg'];




}

if (isset($_SESSION['usuario'])) {
    switch ($pg) {
        case 'cpanel':
            include_once "app/paineladm/index.php";
            break;
        
        default:
        include_once "app/paineladm/index.php";
            break;
    }


}else {
    include_once "app/paineladm/paginas/login.php";
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