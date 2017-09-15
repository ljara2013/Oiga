<?php 
//error_reporting(0); 

//Nos conectamos a la base de datos
include 'connect.php';

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}


class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
}



try {
	$eventos=$db->prepare("SELECT * FROM `eventos`");
	$eventos->execute();

    $resul = $eventos->fetchAll(PDO::FETCH_ASSOC);     //crea un arreglo con todos los datos
    echo json_encode($resul);
	
    // $result = $eventos->setFetchMode(PDO::FETCH_ASSOC); 
    // foreach(new TableRows(new RecursiveArrayIterator($eventos->fetchAll())) as $k=>$v) { 
    //     echo $v. "-" ;
    // }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
