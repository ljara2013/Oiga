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
try {
		$eventos=$db->prepare("SELECT usuarios.nombre, eventos.titulo, usuarios.nombre, eventos.anonimo, eventos.tipo,eventos.descripcion, eventos.coordenadas, eventos.fecha FROM eventos INNER JOIN usuarios ON eventos.id_usuario=usuarios.id;");
	$eventos->execute();

        $resul = $eventos->fetchAll(PDO::FETCH_ASSOC);     //crea un arreglo con todos los datos     
         echo json_encode($resul);
	
  
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
