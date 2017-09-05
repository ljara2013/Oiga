<?php
class conexion
{

private $usuario="id2746458_lesly";
private $pass= "123456";
private $db= "id2746458_oiga";
private $user;
private $password;



public function __construct()
{
   $this->conexion = new mysqli("localhost","id2746458_lesly","123456", "id2746458_oiga");


   if($this->conexion->connect_errno)
   {
      die("fallo la conexion" . $this->conexion->connect_errno);

   }
}
public function cerrar()
{
   $this->conexion->close();
}

public function login($usuario,$pass)
{
   $this->user = $usuario;
   $this->password = $pass;

  
   $query1 = "SELECT * from invitados where correo = '" . $this->user . "' and clave= '". $this->password."'";
   $query2 = "SELECT * from usuario where email = '" . $this->user . "' and clave= '". $this->password."'";

   $consulta1 = $this->conexion->query($query1);
   $consulta2 = $this->conexion->query($query2);

   if($row = mysqli_fetch_array($consulta1))
   {
      session_start();
      
       header('Location: ../paginvitado.html');
   }
  if($row = mysqli_fetch_array($consulta2))
   {
      session_start();
      
        header('Location: ../pagusuario.html');
   }
      




}



}
?>