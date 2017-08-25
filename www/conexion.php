$server = "localhost";
$username = "root";
$password = "";
$database = "phonegap";
$con = mysql_connect($server, $username, $password) or die ("Error al conectar: " . mysql_error());
mysql_select_db($database, $con);
