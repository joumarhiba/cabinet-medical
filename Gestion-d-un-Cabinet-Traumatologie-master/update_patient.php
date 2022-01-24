<?php
  session_start();
  if (isset($_SESSION["username"]) === false) {
    header("location:index.php");
  }
  if (isset($_GET['id'])) {
    $id = $_GET["id"];
    if (!empty($id) && is_numeric($id)) {
      include("connection.php");
      $query = "SELECT * FROM patient WHERE idP=$id";
      $res = $con-> query($query);
      $data = $res -> fetchAll();
      $idPatient = $data[0]["idP"];
      $nomPatient = $data[0]["nomP"];
      $prenomPatient = $data[0]["prenomP"];
      $dnPatient = $data[0]["dnP"];
      $telPatient = $data[0]["tel"];
      $emailPatient = $data[0]["email"];
      $maladiePatient = $data[0]["maladie"];

    }
  }
  if (isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["dn"]) && isset($_POST["tel"]) && isset($_POST["email"]) && isset($_POST["maladie"])) {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $dn = $_POST["dn"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $maladie = $_POST["maladie"];

    include("connection.php");
    $req = "UPDATE patient SET nomP='$nom',prenomP='$prenom',dnP='$dn',tel='$tel',email='$email',maladie='$maladie' WHERE idP=$id";
    $con -> exec($req);

    header("Location:patients.php");
    

  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Patient</title>
  <link rel="stylesheet" href="./styles/update_patient.css">
</head>
<body>
<h2 class="heading2">Update Patient ID:<?php echo $idPatient ?></h2>
<div class="formulaire">
    <form id="frml" method="post">
      <input type="hidden" name="id" value="<?php echo $idPatient ?>"/>
      <div class="field">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?php echo $nomPatient ?>"/>
      </div>
      <div class="field">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $prenomPatient ?>"/>
      </div>
      <div class="field">
        <label for="dn">Date de naissance</label>
        <input type="date" id="dn" name="dn" value="<?php echo $dnPatient ?>"/>
      </div>
      <div class="field">
        <label for="tel">Numéro de téléphone</label>
        <input type="text" id="tel" name="tel" value="<?php echo $telPatient ?>"/>
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $emailPatient ?>"/>
      </div>
      <div class="field">
        <label for="maladie">Maladie</label>
        <input type="text" id="maladie" name="maladie" value="<?php echo $maladiePatient ?>"/>
      </div>
      <div id="msg" style="text-align:center;"></div>
      <div class="button">
        <button id="ajt" class="ajouter">Modifier</button>
      </div>
    </form>
    <script src="./scripts/form.js"></script>
</body>
</html>