<?php

include("includes/conx.php");
include("classes/clase_usuario.php");


$usuario = new Usuario();
$loginError = '';

if(!empty($_POST['login']))
{
  $mail= $_POST['user'];
  $pass= $_POST['pass'];

  if(strlen(trim($mail))>3 && strlen(trim($pass))>4)
  {
  	$uid = $usuario->usuarioLogin($mail, $pass);
  	if ($uid)
  	{
  	  echo "Bienvenido!";
  	  /*
  	  $url = BASE_URL.'cosa.html';   
  	  header('Location: $url');  // redirigir a la pagina por defecto al realizar login
  	  */
  	}
  	else
  	{
      $loginError = 'El usuario y/o contraseña son incorrectos';
  	  echo "$loginError";
  	}
  }
}









?>



