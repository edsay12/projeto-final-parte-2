

<?php
// headee
include_once "app/site/paginas/includes/header.php";

// <!-- navegaçao -->
include_once "app/site/paginas/includes/navegaçao.php";

// <!-- Paginas do meu site -->

$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'contato':
            include_once "app/site/paginas/contato.php";
            break;

        case 'produtos':
            include_once "app/site/paginas/produtos.php";
            break;
        case 'validalogin':
            include_once "app/site/paginas/validalogin.php";
            break;

            break;
        case 'inicial':
            include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}

// <!-- Rodape -->

include_once "app/site/paginas/includes/footer.php";

?>  


