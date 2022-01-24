<?php

if (isset($_POST['nom'])) {
    
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $Message = $_POST['msg'];

  include("connection.php");
  
  $req = "INSERT INTO contact(id,nom,prenom,Email,`message`) VALUES (NULL,:nom,:prenom,:email,:msg)";

  $res = $con -> prepare($req);
  $res -> execute(array(":nom"=>$nom,":prenom"=>$prenom,":email"=>$email,":msg"=>$Message));

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://kit.fontawesome.com/a7f2aae210.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/contact.css">
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
        <a id="login" class="navELs" href="./index.php"><button>Logout</button></a>
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

      <h3 class="titre">Contact Us</h3>
      <br><p class="sous-titre">Des questions ou des remarques ? Envoyer nous un message</p>
      <div class="formulaire">
       <form method="post">
         <div>
          <label for="name" id="l-nom">Nom</label>
         <br> <input type="text" id="nom" name="nom" required>
         </div>
         <div>
          <label for="f-prenom" id="l-prenom">Prénom</label>
          <br><input type="text" id="prenom" name="prenom" required>
         </div>
         <div>
          <label for="name" id="l-email">Email</label>
          <br><input type="email" id="email" name="email" required>
         </div>
         <div>
          <label for="msg" id="l-msg">Message</label>
          <br><textarea id="msg" name="msg" required></textarea>
         </div>
         <div>
           <button class="btn" >Envoyer</button>
         </div>
        </form>
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
        <a href="#">Contact Us</a>
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
      <a id="login"  href="./patients.php"><button>Login</button></a>
    </div>
      <script src="./scripts/script.js"></script>
    </body>
</html>