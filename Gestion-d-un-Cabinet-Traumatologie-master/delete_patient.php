<?php
  if (isset($_GET['id'])) {
    $id = $_GET["id"];
    if (!empty($id) && is_numeric($id)) {
      include("connection.php");
      $query = "DELETE FROM patient WHERE idP='$id'";
      $con-> exec($query);
      header("Location: patients.php");
    }
  }
  
?>
