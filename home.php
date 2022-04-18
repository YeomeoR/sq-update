<?php 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/styles.css">
    <title>Document</title>
  </head>
  <?php 
  include 'navbar.php';
  ?>
<body>
  <div class="hero-animation-container">
    
    <div class="hero-container">
      <div id="hero-title-container">
        
        <h1 class="hero-title"><a href="services.php"><span id="pink-advantage">Advantage through sustainability</span></a><br /></h1>
        <h1 class="hero-title"><a href="services.php">Company Sustainability</a></h1>
        <h1 class="hero-title"><a href="services.php">Net Zero Carbon</a></h1>
        <h1 class="hero-title"><a href="services.php">Circular Economy</a></h1>
        <h1 class="hero-title"><a href="services.php">Training & e-Learning</a></h1>

      </div>

      <div class="icon-container">
        <div class="icon" id="co2-cloud"><a href="services.php">
          <img src="/images/iconmonstr-weather-91-48.png" alt="" >
          </a>
        </div>
        <div class="icon" id="house-health">
          <a href="services.php">
          <img src="/images/iconmonstr-home-10-32.png" alt="">
          </a>
        </div>
        <div class="icon" id="circular-economy">
          <a href="services.php">
          <img src="/images/iconmonstr-networking-2-48.png" alt="">
          </a>
        </div>
        <div class="icon" id="link-local">
          <a href="services.php">
          <img src="/images/iconmonstr-link-1-48.png" alt="">
          </a>
        </div>
        <div class="icon" id="bio-net-gain">
          <a href="services.php">
          <img src="/images/iconmonstr-tree-5-48.png" alt="">
          </a>
        </div>
      </div>
    </div>
</div>

          <div className="contact">
          <img src="" alt="cyber essentials" />
            <button>email</button>
            </div>

</div>


<div class="footer-container">  
    <?php 
      include 'footer.php';
    ?>
</div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="main.js"></script>
</body>

</html>