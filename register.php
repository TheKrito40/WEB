<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-sacel=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles.css">
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
            <a href="login.php" class="button" id="social-media-page">Already Have</a>   
          </li>
         </ul>
      </div>
    </nav>
<div class="heros">
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="../singup.inc.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" >

            </div>
            <div class="form-group">
                <label>Email Account</label>
                <input type="text" name="email" class="form-control" >

            </div>      
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" >
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
               
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn_register_submit" value="Submit">
                <input type="reset"  name="reset"  class="btn-btn-secondary" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>  
</div>
    <?php 
        if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
            }
            if ($_GET["error"] == "diffpwd") {
            echo "<p>Passwords dont match!</p>";
            }
            if ($_GET["error"] == "invalidusername") {
            echo "<p>Please use a valid username!</p>";
            }
            if ($_GET["error"] == "userused") {
            echo "<p>User already taken!</p>";
            }
            if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
            }
            if ($_GET["error"] == "none")  {
                header("location: ../index.php");
            }
        }
    ?> 
            <!-- Footer Section -->
        <div class="footer__container">
          <div class="footer__links">
            <div class="footer__link--wrapper">
              <div class="footer__link--items">
                <h2>About Us</h2>
                <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
                <a href="/">Careers</a> <a href="/">Terms of Service</a>
              </div>
              <div class="footer__link--items">
                <h2>Contact Us</h2>
                <a href="/">Contact</a> <a href="/">Support</a>
                <a href="/">Destinations</a>
              </div>
            </div>
            <div class="footer__link--wrapper">
              <div class="footer__link--items">
                <h2>Videos</h2>
                <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
                <a href="/">Agency</a>
              </div>
              <div class="footer__link--items">
                <h2>Social Media</h2>
                <a href="https://instagram.com/aandrei_b_">Instagram Personal</a> <a href="https://instagram.com/thkrio">Instagram</a>
                <a href="https://www.youtube.com/channel/UCNMB_xsp6m0yMbaQsTm-lCw">Youtube</a> <a href="https://twitter.com/AndreiBadea16">Twitter</a>
              </div>
            </div>
          </div>
          <section class="social__media">
            <div class="social__media--wrap">
              <div class="footer__logo">
                <a href="/" id="footer__logo">TheKrito Media</a>
              </div>
              <p class="website__rights">© TheKrito 2021-2022. All rights reserved</p>
              <div class="social__icons">
                <a href="/" class="social__icon--link" target="_blank"
                  ><i class="fab fa-facebook"></i
                ></a>
                <a href="/" class="social__icon--link"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a href="/" class="social__icon--link"
                  ><i class="fab fa-youtube"></i
                ></a>
                <a href="/" class="social__icon--link"
                  ><i class="fab fa-linkedin"></i
                ></a>
                <a href="/" class="social__icon--link"
                  ><i class="fab fa-twitter"></i
                ></a>
              </div>
            </div>
          </section>
        </div>
    
    <script src="app.js"></script>
</body>
</html>