<?php 
  $dsn = 'mysql:host=localhost;dbname=cabinet';
  $user = 'root';
  $pw = '';

  try {
    $con = new PDO($dsn,$user,$pw);
    $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch (PDOException $e) {
    echo 'Connection Failed' . $e -> getMessage();
  }

?>