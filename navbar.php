<?php
include 'functions/siteFunctions.php';
include 'includes/constants.php';
include 'functions/loginFunctions.php';

setSession();
// if logged in, set session vars for user details:
// $_SESSION['userForename'], $_SESSION['userSurename'], $_SESSION['userCompany'], $_SESSION['userEmail']
$loggedIn = checkLogin( $dbconn ); // bool

?>
<nav class="navbar-container">
    
    <div id="nav-items-container">
        <div class="nav-items" id="home"><a href="home.php"><img src="/images/sqGainLogo.png.png" alt="logo" id="nav-logo"></a></div>
        <div class="nav-items not-logo" id="about"><a href="about.php">About Us</a></div>
        <div class="nav-items not-logo" id="services"><a href="services.php">Services</a></div>
        <div class="nav-items not-logo" id="projects"><a href="projects.php">Projects</a></div>
        <div class="nav-items not-logo" id="contact"><a href="contact.php">Contact Us</a></div>
        <?php if ( $loggedIn ) { ?>
            <div class="nav-items not-logo" id="login"><a href="#">Login</a></div>
        <?php } else { ?>
                <div class="nav-items not-logo" id="logout"><a href="#">Log Out</a></div>
        <?php } ?>
    </div>
</nav>

<input id="forename" type="text" placeholder="Forename *">
<input id="surname" type="text" placeholder="Surname *">
<input id="email" type="text" placeholder="Email *">
<input id="phone-number" type="text" placeholder="Phone Number">
<input id="company" type="text" placeholder="Company *">
<input id="company-sector" type="text" placeholder="Company Sector">
<input id="govt-sector" type="text" placeholder="Govt. Sector">
<a id="register-user" class="form-button" href="/navbar.php">Sign Up</a>
