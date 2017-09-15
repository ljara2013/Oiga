<?php 
//error_reporting(0);

//Nos conectamos a la base de datos
include 'connect.php';

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$mail= $_POST['mail'];
$pass= $_POST['pass'];

$invi=$db->prepare("SELECT * FROM `invitados` WHERE correo = :mail AND clave = :pass");
$invi->bindValue(':mail',$mail,PDO::PARAM_STR);		//PDO::PARAM_INT para enteros
$invi->bindValue(':pass',$pass,PDO::PARAM_STR);
$invi->execute();

$user=$db->prepare("SELECT * FROM `usuarios` WHERE correo = :mail AND clave = :pass");
$user->bindValue(':mail',$mail,PDO::PARAM_STR);		//PDO::PARAM_INT para enteros
$user->bindValue(':pass',$pass,PDO::PARAM_STR);
$user->execute();

if($user->rowCount()>0){																	//Si el usuario está registrado
	$fila = $user->fetch(PDO::FETCH_ASSOC);
	$_SESSION['mail'] = htmlentities($fila['correo']);			//Inicio variables de sesión
	$_SESSION['nom1'] = htmlentities($fila['nombre']);			
	$_SESSION['ape1'] = htmlentities($fila['apellido1']);		
	$_SESSION['rang'] = htmlentities($fila['rango']);
	echo 1;																									//mando orden de entrar al sistema           (redireccionar en frontend mediante $.ajax de jquery)
}
else{																				//sino,	
	if($invi->rowCount()>0) echo 2;						//si es invitado, mando orden de ir a completar registro   (redireccionar en frontend mediante $.ajax de jquery)
	else echo 3;															//si tampoco es invitado, mando orden de ir al index       (redireccionar en frontend mediante $.ajax de jquery)
}
?>