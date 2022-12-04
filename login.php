 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-sacel=1.0">
    <title>Login</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-pc">
</head>
<body>
<!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar_container">
         <a href="#home" id="navbar__logo"></a>
         <div class="navbar__toggle" id="mobile-menu">
             <span class="bar"></span>
             <span class="bar"></span>
             <span class="bar"></span>
         </div>
         <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="index.php#home" class="navbar__links" id="home-page">Home</a>  
          </li>
          <li class="navbar__item">
            <a href="index.php#about" class="navbar__links" id="about-page">About</a>  
          </li>
          <li class="navbar__item">
            <a href="index.php#specifications" class="navbar__links" id="specifications-page">Specifications</a>  
          </li>
          <li class="navbar__btn">
            <a href="register.php" class="button" id="social-media-page">Don't Have Any</a>   
          </li>
         </ul>
      </div>
    </nav>
<div class="hero">
<div class="background">
    <div class="wrapper">

                <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
    </div>
        <script src="app.js"></script>
</body>
</html>