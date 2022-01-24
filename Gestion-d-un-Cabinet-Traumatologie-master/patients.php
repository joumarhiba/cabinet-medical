<?php 
  session_start();
  if (isset($_SESSION["username"]) === false) {
    header("location:login.php");
  }
  $Message = '';
  
  if (isset($_POST['nom'])) {
  
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dn = $_POST['dn'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $maladie = $_POST['maladie'];
  
    include("connection.php");
    
    $req = "INSERT INTO patient(idP,nomP, prenomP,dnP,tel,email,maladie) VALUES (NULL,:nom,:prenom,:dn,:tel,:email,:maladie)";

    $res = $con -> prepare($req);
    $res->execute(array(":nom"=>$nom,":prenom"=>$prenom,":dn"=>$dn,":tel"=>$tel,":email"=>$email,":maladie"=>$maladie));

  }
      
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cabinit Medical</title>
  <script src="https://kit.fontawesome.com/a7f2aae210.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="./styles/patients.css" />
</head>

<body>
  <header>
    <div class="logo">
      <img src="./assets/logo/rr.png" alt="logo image" />
    </div>
    <nav class="navELs">
      <ul>
        <li><a href="./index.php">Home</a></li>
      </ul>
    </nav>
    <a id="login" class="navELs" href="logout.php"><button>Logout</button></a>
    <div id="menu" class="menu ghbar"
      onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))">
      <svg id="hamburger" width="100" height="100" viewBox="0 0 100 100">
        <path class="line line1"
          d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
        <path class="line line2" d="M 20,50 H 80" />
        <path class="line line3"
          d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
      </svg>
    </div>
  </header>
  <h2 class="heading2">Gestion des patients</h2>
  <div class="formulaire">
    <form id="frml" method="post">
      <div class="field">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom"/>
      </div>
      <div class="field">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" />
      </div>
      <div class="field">
        <label for="dn">Date de naissance</label>
        <input type="date" id="dn" name="dn" />
      </div>
      <div class="field">
        <label for="tel">Numéro de téléphone</label>
        <input type="text" id="tel" name="tel" />
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
      </div>
      <div class="field">
        <label for="maladie">Maladie</label>
        <input type="text" id="maladie" name="maladie" />
      </div>
      <div id="msg"><?php echo $Message ?></div>
      <div class="button">
        <button id="ajt" class="ajouter">Ajouter</button>
      </div>
    </form>
  </div>
  <h2 class="heading2 lp">Liste des patients</h2>
    <div class='patientsContainer'>
         <?php
          include("connection.php");
          $query = 'SELECT * FROM patient';
          $result = $con ->query($query);
          $data = $result ->fetchAll();
          for ($i=0; $i <count($data) ; $i++) { 
            $idP = $data[$i]['idP'];
            $nomP = $data[$i]['nomP'];
            $prenomP = $data[$i]['prenomP'];
            $dnP = $data[$i]['dnP'];
            $telP = $data[$i]['tel'];
            $emailP = $data[$i]['email'];
            $maladieP = $data[$i]['maladie'];
            echo "
            <div class='patient'>
              <div class='f-child'>
                <p>Id</p>
                <p>Nom</p>
                <p>Prenom</p>
                <p>n° telephone</p>
                <p>date de naissance</p>
                <p>email</p><p>maladie</p>
              </div>
              <div class='m-child'>
                <p>$idP</p>
                <p>$nomP</p>
                <p>$prenomP</p>
                <p>$dnP</p>
                <p>$telP</p>
                <p>$emailP</p>
                <p>$maladieP</p>
              </div>
              <div class='l-child'>
                <a class='sup' onclick='return confirm(\"etes vous sur de vouloir supprimer $nomP $prenomP\")' href='delete_patient.php?id=$idP'><button><i class='fas fa-user-minus'></i></button></a>
                <a class='mdf' href='update_patient.php?id=$idP'><button><i class='fas fa-user-edit'></i></button></a>
              </div>
            </div>";
          }
          
        ?>
        </div>
      </div>
  <footer>
    <div class="footerDivs">
      <img src="./assets/logo/rr.png" alt="footer logo" />
      <div class="socials">
        <a href="http://" target="_blank"><i class="fab fa-twitter-square"></i></a>
        <a href="http://" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="http://" target="_blank"><i class="fab fa-instagram-square"></i></a>
      </div>
    </div>
    <div class="footerDivs">
      <p class="footerHeading">Quick Links</p>
      <a href="#">Help</a>
      <a href="#">FAQ</a>
      <a href="contact.php">Contact Us</a>
    </div>
    <div class="footerDivs">
      <p class="footerHeading">contact</p>
      <div class="contactEls">
        <i class="fas fa-map-marker-alt"></i>93, Bd Massira Khadra, 4ème ETG
        Casablanca
      </div>
      <div class="contactEls">
        <i class="fas fa-envelope-square"></i>rahbanirafik@traumatologie.com
      </div>
    </div>

  </footer>
  <div id="mnav" class="mobileNavigation">
    <a class="firstpage" href="./index.php">Home</a>
    <a id="login" href="logout.php"><button>Logout</button></a>
  </div>
  
  <script src="./scripts/script.js"></script>
  <script src="./scripts/form.js"></script>
</body>

</html>