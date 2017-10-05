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
  
  $sql = "SELECT * FROM `eventos`";
  $result = $db->query($sql);

  // If the SQL query is succesfully performed ($result not false)
  if($result !== false) {     
    $cols = $result->columnCount();           // Number of returned columns

    echo 'Number of returned columns: '. $cols. '<br />';

    // Parse the result set
    foreach($result as $row) {
      echo $row['id']. ' - '. $row['tipo']. ' - '. $row['titulo']. ' - '. $row['coodenadas']. '<br />';
    }
  }

  $db = null;        // Disconnect
}
catch(PDOException $e) {
  echo $e->getMessage();
}


?>
