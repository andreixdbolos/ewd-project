<?php

session_start();

include("php/connection.php");
include("php/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['username']; 
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        
        echo "Wrong username or password!";
    }
    else
    {
        echo "Wrong username or password!";
    }
}
?>

<!DOCTYPE html>
<!-- Rest of the HTML code remains the same -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/navbar.css?v=2" />
    <link rel="stylesheet" href="css/index.css?v=2" />
    <link rel="stylesheet" href="css/footer.css?v=2" />
    <link rel="stylesheet" href="css/shop.css?v=2" />
    <link rel="stylesheet" href="css/sneaker-page.css?v=2" />
    <link rel="stylesheet" href="css/login.css?v=2" />
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
          <!-- <ul class="hidden meniu-dpd">
            <li><a href="index.php">Acasa</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">Despre</a></li>
            <li><a href="login.php">Login</a></li>
          </ul> -->

          <div class="hamburger">
            <div class="middle-bar">
              <div class="top-bar"></div>
              <div class="bottom-bar"></div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div id="login-content">
      <div class="login-form">
        <h2>Log in</h2>
        <form method="post">
          <input
            type="text"
            name="username"
            placeholder="Username"
            id="username-field"
          />
          <br />
          <input
            type="password"
            name="password"
            placeholder="Password"
            id="password-field"
          />
          <br />
          <div id="login-container">
            <input type="submit" value="Log in" id="login-button" />
            <a href="register.php" id="register-button"
              >Don't have an account? Register!</a
            >
          </div>
        </form>
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
