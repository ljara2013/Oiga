<?php 
//error_reporting(0); 

//Nos conectamos a la base de datos
include 'connect.php';

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}



$eventos=$db->prepare("SELECT * FROM `eventos`");
$eventos->execute();



try {
	$eventos=$db->prepare("SELECT * FROM `eventos`");
	$eventos->execute();
	
    $result = $eventos->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($eventos->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
