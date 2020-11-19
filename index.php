<?php
//Header
include_once "app/site/paginas/includes/header.php";
//Navegaçao 
include_once "app/site/paginas/includes/navegacao.php";



// Páginas do meu Site 

$paginas= isset($_GET['pg']);
if ($paginas) {
    # code...
    switch ($_GET['pg']) {
        
        case 'inicial':
            include_once "app/site/paginas/inicial.php";
            break;

        case 'produtos':
            include_once "app/site/paginas/produtos.php";
            break;

        case 'contato':
            include_once "app/site/paginas/contato.php";
            break;
            
            case 'validalogin':
                include_once "app/site/paginas/validalogin.php";
                break;

        default:
        include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}

//Rodape
include_once "app/site/paginas/includes/footer.php";
