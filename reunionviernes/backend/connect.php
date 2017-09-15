<?php
try {
	$db="id2329550_losturnos";						//datos del hosting
	$us="id2329550_pancreatico";
	$pw="klampot564rico";
	$params = 'mysql:host=localhost;dbname='.$db.';charset=utf8';
	
	$db = new PDO($params, $us, $pw);			//variable $db contiene la conexión PDO

} catch (PDOException $e) {
	die('Error: ' . $e->getMessage());
}
?>