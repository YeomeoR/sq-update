<?php
include_once "includes/constants.php";
include_once "functions/dbFunctions.php";
include_once "functions/siteFunctions.php";
include 'functions/loginFunctions.php';

setSession();
// if logged in, set session vars for user details:
// $_SESSION['userForename'], $_SESSION['userSurename'], $_SESSION['userCompany'], $_SESSION['userEmail']
$loggedIn = checkLogin( $dbconn ); // bool

?>
<link rel="stylesheet" href="styles.css" />

<nav class="navbar-container">
    
    <div id="nav-items-container">
        <div class="nav-items" id="home"><a href="home.php"><img src="/images/sqGainLogo.png" alt="logo" id="nav-logo"></a></div>
        <div class="nav-items not-logo" id="services"><a href="services.php">Services</a></div>
        <div class="nav-items not-logo" id="projects"><a href="projects.php">Projects</a></div>
        <div class="nav-items not-logo" id="about"><a href="about.php">About Us</a></div>
        <div class="nav-items not-logo" id="contact"><a href="contact.php">Contact Us</a></div>
        <?php if ( $loggedIn ) { ?>
            <div class="nav-items not-logo" id="logout"><a href="#">Log Out</a></div>
        <?php } else { ?>
            <div class="nav-items not-logo" >Login</div>
            <div class="login-drop-down login-drop-down-down">
                <input type="text" class="login-email-input" placeholder="email">
                <input type="text" class="login-password-input" placeholder="password">
                <button class="login">Log in</button>
            </div>
            <a id="go-to-register" class="form-button" href="register.php">Sign Up</a>
        <?php } ?>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="navbar.js" ></script>


