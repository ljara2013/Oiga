<?php

class Usuario
{
  public function usuarioLogin($usermail, $pass)
  {
    try
    {
   	  $db = conectaDB();
  	  //$pass_hash = password_hash('sha256', $pass); // pass Encriptada
  	  $pass_hash = $pass; // mientras no se modifique el max de caracteres en la db
      $stmt = $db->prepare("SELECT id FROM usuario WHERE email=:usermail AND clave=:pass_hash");
      $stmt->bindValue(':usermail', $usermail, PDO::PARAM_STR);
      $stmt->bindValue(':pass_hash', $pass_hash, PDO::PARAM_STR);
      $stmt->execute();
      $data = $stmt->fetch(PDO::FETCH_OBJ);

      if($stmt->rowCount())  // si existe el usuario
      {
      	$SESSION[0] = $data->id;  // se guarda la variable de sesion
      	return true;
      }
      else // no existe el usuario
      {
        return false;
      }
    }
    catch(PDOExeption $e)
    {
      echo "Error: ".$e->getMessage();
    }
  }


/*
  public function usuarioRegistro( )
  {
    try
    {
	    $db = getDB();
    }


    catch(PDOExeption $e)
    {
      echo "Error: ".$e->getMessage();
    }
  }

*/




  public function usuarioDatos($uid)
  {
  	try
  	{
  	  $db = conectaDB();
  	  $stmt = $db->prepare("SELECT nombre, apellido1, apellido2, mail, telefono, coordenadas FROM usuario WHERE id=:uid");
  	  $stmt =bindValue("uid", $uid, PDO::PARAM_INT);
  	  $stmt->execute();
  	  $data = $stmt->fetch(PDO::FETCH_OBJ);
  	  return $data;
  	}
    catch(PDOExeption $e)
    {
      echo "Error: ".$e->getMessage();
    }
  }

}
 

?>