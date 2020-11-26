<?php

include_once "app/paineladm/helpers/conexao.php";


//Header
include_once "app/site/paginas/includes/header.php";
//Navegaçao
include_once "app/site/paginas/includes/navegaçao.php";



// Páginas do meu Site

$paginas = isset($_GET['pg']);
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


        case 'cad_mensagem':

            // peahr variaveis via post
            // validar parametros
            // inserrir banco de bados 
            // retornar liosta de contatos 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $categoria = $_POST['categoria'];
                $Msg = $_POST['msg'];

                $parametros = array(

                    ':nome' => $nome,
                    ':email' => $email,
                    ':categoria' => $categoria,
                    ':msg' => $Msg
                    

                );

                $inserirmsg = new Conexao();
                $inserirmsg->intervencaoNoBanco('INSERT INTO contato (nome,email,Msg,categoria) VALUES (:nome,:email,:msg,:categoria)', $parametros);
                header ('location: ?pg=contato');
            } else {
            }

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
