<!DOCTYPE html>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/navbar.css?v=2" />
    <link rel="stylesheet" href="css/index.css?v=2" />
    <link rel="stylesheet" href="css/footer.css?v=2" />
    <link rel="stylesheet" href="css/shop.css?v=2" />
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
            <!-- <li><a href="login.php">Login</a></li> -->
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

    <div id="bar">
      <div class="container bar-content">
        <div class="bar-text">
          <h2>SNEAKERS</h2>
        </div>
      </div>
    </div>

    <div class="linie"></div>

    <div id="products">
      <div class="container">
        <div class="product">
          <div class="product-img">
            <a href="aj4.php"><img src="imagini/aj4rabbit.jpg" /></a>
          </div>
          <div class="product-text">
            <h2>Air Jordan 4 Retro</h2>
            <div class="product-price">
              <p>1600 RON</p>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="product-img">
            <a href="aj1mocha.php"><img src="imagini/aj1mocha.png" /></a>
          </div>
          <div class="product-text">
            <h2>Air Jordan 1 Retro High</h2>
            <div class="product-price">
              <p>2500 RON</p>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="product-img">
            <a href="af1.php">
              <img src="imagini/af1-removebg-preview (1).png"
            /></a>
          </div>
          <div class="product-text">
            <h2>Air Force 1</h2>
            <div class="product-price">
              <p>600 RON</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="linie"></div>

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
