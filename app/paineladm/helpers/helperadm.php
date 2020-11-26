



<?php
include_once "app/paineladm/helpers/conexao.php";





function verificaSeLogado()
{

  $usuario = trim($_POST['usuario']);
  $senha = trim($_POST['senha']);
  $parametros = array(

    ':usuario' => $usuario,
  );
 $resultConexao = new conexao();
  $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios Where nome = :usuario', $parametros);

  if (count($resultadoConsulta) > 0) {
    $senha_bd = $resultadoConsulta[0]['senha'];
    if (password_verify($senha,$senha_bd)) {
       $_SESSION['usuario'] = $usuario;
return true;
    } else {
      echo 'senha nao confere';
      return false;
    }
    
    return true;
  } else {
    echo 'usuario ou senha invalida';
  }
}

function inserirusuario()
{

  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $parametros = array(

    ':nome'  => $nome,
    ':senha'  => password_hash($senha, PASSWORD_DEFAULT)

  );


  $resultdados = new Conexao();
  $resultdados->intervencaonoBanco('INSERT INTO usuarios(nome,senha) VALUES (:nome,:senha)', $parametros);

  include_once "app/paineladm/paginas/usuarios listar.php";
}


function atualizarusuario()
{

  $idusuario = trim($_POST['id_usuario']);
  $senha = trim($_POST['senha']);

  $parametros= array(
    // validando variaveis
    ':id_usuario' => $idusuario,
    ':senha' => password_hash($senha, PASSWORD_DEFAULT)

  );

  


  // atualizar banco
  $atualizausuario = new Conexao();
  $atualizausuario->intervencaonoBanco('UPDATE usuarios SET senha = :senha WHERE id_usuario = :id_usuario', $parametros);

  include_once "app/paineladm/paginas/usuarios listar.php";
};



function visualizarusuario($id)
{

  if ($id) {
    $parametros = array(
      ':id_usuario' => $_GET['id']

    );

    $resultusuarioconsulta = new Conexao();

    $dados = $resultusuarioconsulta->consultarBanco('SELECT * FROM usuarios WHERE id_usuario = :id_usuario', $parametros);
    if (count($dados) > 0) {
      return $dados;
    } else {
      header('location:  ?pg=usuarios listar');
    }
  }
}

  //verificar sem precisar d ebanco de dados 
  // $usuario = 'senac';
  // $senha = '123456';

  // if ($_POST['usuario'] == $usuario) {
  //   $_SESSION['usuario'] = $usuario;
  //   return true;
  // } else {
  //  echo 'usuario e senha invalida';
  // }
