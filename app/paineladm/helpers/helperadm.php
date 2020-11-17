<?php   

function verificalogin()
{
  $usuario = 'edsay12@hotmail.com';
  $senha = '123456';


if ($_POST['usuario'] == $usuario) {
    $_SESSION['usuario']=$usuario;
    
return true;
} else {
  
 echo 'Senha invalida';
 return FALSE;

  }



}
