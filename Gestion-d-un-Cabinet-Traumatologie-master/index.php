<?php
  session_start();
    if (isset($_SESSION["username"])) {
      header("location:patients.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cabinit Medical</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./styles/home.css" />
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
    <a id="login" class="navELs" href="./login.php"><button>Login</button></a>
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
  <svg class="bg-svg" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 902.28 474.85">
    <path class="cls-1"
      d="M0,451.89c77-10.25,787-105.09,847.19-125.2a86.36,86.36,0,0,0,30.27-17.89c23.48-23.1,24.39-57.31,24.76-71.54C904.59,148,828.65,76.49,822.43,70.79,778.24,30.29,728.6,12,689,1.9,479.76-51.32,46.12-3.36,0,1.9"
      transform="translate(0 22.96)" />
  </svg>
  <div class="top">
    <h1>
      Ensuring Your Protection 
      & Providing The Best <br />
      Affordable Healthcare <br />
      With Our Doctors
    </h1>
    <div class="img-holder">
      <img src="./assets/cover/coverDa2ira.jpg" alt="" />
    </div>
  </div>
  <div class="aboutMe">
    <h2 class="heading2">À propos de moi</h2>
    <div class="flex">
      <div class="tbib">
        <img src="./assets/doctors/drRafik.png" alt="Doctor image" />
      </div>
      <div class="column">
        <h3>DR. RAHBANI Rafik</h3>
        <h4 class="text specialite">Traumatologie</h4>
        <p class="text">
          Après plusieurs années passées en France en tant que chirurgien en
          traumatologie dans le secteur public et privé, dans différents
          établissements , DR. Rahbani Rafik a décidé de rentrer au Maroc en
          2004 où il a ouvert son propre cabinet en 2005 pour vous recevoir et
          vous servir au mieux. Connu par son dévouement, son expertise et sa
          compétence, il est considéré comme une référence ici au Maroc et à
          l’étranger.
        </p>
      </div>
    </div>
  </div>
  <div class="da">
    <h2 class="heading2">Domaine d'activité</h2>
    <h3>Traumatologie</h3>
    <div class="daFlex">
      <div class="daih"></div>
      <p class="text">
        La traumatologie est la spécialité médicale consacrée aux traumatismes
        physiques, c’est-à-dire l’ensemble des coups, blessures ou chocs subis
        de façon violente et soudaine. Elle est rattachée à la chirurgie
        traumatologique, puisque les blessures graves relèvent de la
        chirurgie.
      </p>
    </div>
  </div>
  <div class="testimonials">
    <h2 class="heading2">témoignages de nos clients</h2>
    <div class="cards">
      <div class="card">
        <div class="firstPart">
          <img src="./assets/icons/double-quotes.png" alt="double quotes" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
            aliquam, purus sit amet luctus venenatis, lectus magna fringilla
            urna.
          </p>
        </div>
        <div class="secondPart">
          <div id="joel" class="profilPhoto"></div>
          <p>
            <span class="name">Joel Mott</span><br /><span class="pro">CEO, ABC Corporation</span>
          </p>
        </div>
      </div>
      <div class="card">
        <div class="firstPart">
          <img src="./assets/icons/double-quotes.png" alt="double quotes" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
            aliquam, purus sit amet luctus venenatis, lectus magna fringilla
            urna.
          </p>
        </div>
        <div class="secondPart">
          <div id="oliver" class="profilPhoto"></div>
          <p>
            <span class="name">Oliver Ragfelt</span><br /><span class="pro">CEO, ABC Corporation</span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footerDivs">
      <img src="./assets/logo/rr.png" alt="footer logo">
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
      <div class="contactEls"><i class="fas fa-map-marker-alt"></i>93, Bd Massira Khadra, 4ème ETG Casablanca</div>
      <div class="contactEls"><i class="fas fa-envelope-square"></i>rahbanirafik@traumatologie.com</div>
      
    </div>
  </footer>
  <div id="mnav" class="mobileNavigation">
    <a class="firstpage" href="./index.php">Home</a>
    <a id="login" href="./login.php"><button>Login</button></a>
  </div>
  <script src="https://kit.fontawesome.com/a7f2aae210.js" crossorigin="anonymous"></script>
  <script src="./scripts/script.js"></script>
</body>

</html>