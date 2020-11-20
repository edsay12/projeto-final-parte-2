



<?php
include_once "app/paineladm/helpers/conexao.php";





function verificaSeLogado()
{

  $usuario = trim($_POST['usuario']);
  $resultConexao = new conexao();
  $parametros = array(

    ':usuario' => $usuario,
  );

  $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios Where nome = :usuario',$parametros);

if (count($resultadoConsulta) >0 ) {
 $_SESSION['usuario'] = $usuario;
    return true;
} else {
   echo 'usuario ou senha invalida';
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
}
