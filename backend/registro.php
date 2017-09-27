<?php 
//error_reporting(0); 
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET, POST');

//Nos conectamos a la base de datos
include 'connect.php';

//Inicio de variables de sesión

if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$nombre= $_POST['nombre'];
$apellido1= $_POST['apellido1'];
$apellido2= $_POST['apellido2'];
$email= $_POST['mail'];
$clave= $_POST['pass'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];



try {
	$insertar=$db->prepare("INSERT INTO `usuario`(nombre, apellido1, apellido2, email, clave, telefono, coordenadas, rango)
                  VALUES( :nombre, :apellido1, :apellido2, :email, :clave, :telefono, :direccion, 1 )");
	$insertar->bindValue(':nombre',$nombre,PDO::PARAM_STR);		//PDO::PARAM_INT para enteros
	$insertar->bindValue(':apellido1',$apellido1,PDO::PARAM_STR);
	$insertar->bindValue(':apellido2',$apellido2,PDO::PARAM_STR);		//PDO::PARAM_INT para enteros
	$insertar->bindValue(':email',$email,PDO::PARAM_STR);
	$insertar->bindValue(':clave',$clave,PDO::PARAM_STR);		//PDO::PARAM_INT para enteros
	$insertar->bindValue(':telefono',$telefono,PDO::PARAM_INT);
	$insertar->bindValue(':direccion',$direccion,PDO::PARAM_INT);
        $insertar->execute();
	

	
	
	$eliminar=$db->prepare("DELETE FROM invitados WHERE email= :email");	
	$eliminar->bindValue(':email',$email,PDO::PARAM_STR);	
	$eliminar->execute();
	
    
        echo json_encode("1");
    }
catch(PDOException $e)
    {
    echo "error : ". $e->getMessage();
    }

?>
