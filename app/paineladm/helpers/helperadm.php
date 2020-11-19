<?php 
function verificaSeLogado(){
$usuario = 'senac';
$senha = '123456';

if($_POST['usuario'] == $usuario){
   $_SESSION['usuario']=$usuario;
  return true;
} else { 
    echo 'usuario e senha invalida';
}

}
