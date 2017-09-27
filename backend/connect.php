<?php
try {
	$db="id2746458_oiga";						//datos del hosting
	$us="id2746458_lesly";
	$pw="123456";
	$params = 'mysql:host=localhost;dbname='.$db.';charset=utf8';
	
	$db = new PDO($params, $us, $pw);			//variable $db contiene la conexión PDO

} catch (PDOException $e) {
	die('Error: ' . $e->getMessage());
}
?>
