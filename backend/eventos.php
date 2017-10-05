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
	$eventos=$db->prepare("SELECT * FROM `eventos`");
	$eventos->execute();

        $resul = $eventos->fetchAll(PDO::FETCH_ASSOC);     //crea un arreglo con todos los datos     
         echo json_encode($resul);
	
  
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
