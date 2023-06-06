<?php
session_start();

if (!isset($_SESSION['redirected']) && !isset($_SESSION['logged_in'])) {
  $_SESSION['redirected'] = true;
  header("Location: login.php");
}

if (isset($_SESSION['loggedIn'])) {
  $loggedIn = true;
} else {
  $loggedIn = false;
}

if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === 'admin' && $password === 'password') {
    $_SESSION['loggedIn'] = true;
    header('Location: index.php');
    exit();
  } else {
  }
}

if (isset($_POST['logout'])) {
  unset($_SESSION['loggedIn']);

  header('Location: index.php');
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/navbar.css?v=2" />
    <link rel="stylesheet" href="css/index.css?v=2" />
    <link rel="stylesheet" href="css/footer.css?v=2" />
    <link rel="icon" href="imagini/aj4logo-removebg-preview.png" />
    <link
      rel="stylesheet"
      media="screen and (max-width: 1080px)"
      href="css/mobile.css?v=2"
    />
    <title>Proiect EWD</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <div class="logo">
          <a href="index.php"
            ><img src="imagini/aj4logo-removebg-preview.png"
          /></a>
        </div>
        <div class="meniu">
          <ul class="hidden meniu-dpd">
            <li><a href="index.php">Acasa</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">Despre</a></li>
            
          </ul>

          <div class="hamburger">
            <div class="middle-bar">
              <div class="top-bar"></div>
              <div class="bottom-bar"></div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div id="showcase">
      <div class="container showcase-content">
        <div class="showcase-text"><h2>WELCOME TO THE HEAVEN!</h2></div>
        <div class="showcase-button"><a href="shop.php
      ">SHOP NOW</a></div>
      </div>
    </div>

    <div id="preview">
      <div class="preview-content container">
        <div class="preview-sneaker"><img src="imagini/dunkblack.jpg" /></div>
        <div class="preview-sneaker"><img src="imagini/af1.jpg" /></div>
        <div class="preview-sneaker"><img src="imagini/aj1blue.jpg" /></div>
      </div>
    </div>

    <footer id="footer">
      <div class="footer-content">
        <div class="social-media">
          <a href="https://www.instagram.com/andreixbolos"
            ><img src="imagini/instagram-logo (1).png"
          /></a>
          <a href="https://www.linkedin.com/in/andrei-bolo%C8%99-408ab1254/"
            ><img src="imagini/linkedin.png"
          /></a>
          <a href="https://github.com/andreixdbolos"
            ><img src="imagini/github-sign.png"
          /></a>
        </div>
      </div>
    </footer>

    <script src="navbar.js"></script>
  </body>
</html>
