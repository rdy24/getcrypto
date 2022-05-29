<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,600&display=swap"
      rel="stylesheet"
    />
    <title>GetCrypto | Login</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div class="container-xl">
      <nav class="navbar">
        <img src="assets/images/logo.png" alt="GetCrypto Logo" />
        <div class="nav-link">
          <a href="index.php" class="active">Home</a>
          <a href="products.php">Products</a>
          <a href="">Contact Us</a>
          <a href="">Blog</a>
          <a href="login.php" class="btn-login">Sign In</a>
        </div>
      </nav>
      <div class="form-login">
        <h3>Login</h3>
        <form action="login-proses.php" method="Post">
          <input class="input" type="text" name="email" placeholder="Email" />
          <input
            class="input"
            type="password"
            name="password"
            placeholder="Password"
          />
          <button type="submit" class="btn-signin" name="login" id="login">
            Login
          </button>
        </form>
        <a href="register.php" class="register">Register Here</a>
      </div>
    </div>
    <hr />
    <footer>
      <div class="footer-img">
        <img src="assets/images/logo1.png" alt="GetCrypto Logo" />
        <br />
        <span>&copy; Copyright 2022. All Rights Reserved.</span>
      </div>
      <div class="footer-about">
        <h4>About Us</h4>
        <a href="">About Us</a>
        <a href="">Careers</a>
        <a href="">Blog</a>
        <a href="">Contact Us</a>
      </div>
      <div class="footer-legal">
        <h4>Legal</h4>
        <a href="">Terms of Use</a>
        <a href="">Privacy Policy</a>
        <a href="">Security</a>
      </div>
      <div class="footer-social">
        <h4>Social</h4>
        <a href="">Facebook</a>
        <a href="">Twitter</a>
        <a href="">Instagram</a>
      </div>
    </footer>
  </body>
</html>
