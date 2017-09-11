<?php

session_start();

function conectaDB()
{
  $file = 'settings.ini';
  if (!$aSettings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');

  $dsn = $aSettings['db']['driver'].
  ':host='.$aSettings['db']['host'].
  ';port='.$aSettings['db']['port'].
  ';dbname='.$aSettings['db']['schema'];
  $user= $aSettings['db']['user'];
  $pass = '';
  //$pass =$aSettings['db']['passwd'] ;

  try
  {
    $conn = new PDO($dsn, $user, $pass);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  }
  catch(PDOExeption $e)
  {
    echo "Error: ".$e->getMessage();
   
  }
}

?>