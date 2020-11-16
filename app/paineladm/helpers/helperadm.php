<?php   

function verificalogin()
{
  $usuario = 'senac@hotmail.com';
  $senha = '123456';


if ($_POST['usuario'] == $usuario) {
    $_SESSION['usuario']=$usuario;
    $_SESSION['senha']=$senha;
return true;
} else {
    echo 'usuario ou senha invalida';
}

}
?> 