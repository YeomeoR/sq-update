<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div id="content-container">

        <form action="sendEmail.php" method="POST" id="contact-form">
            
            Name: <input type="text" name="name" id="name" placeholder="Your Name" required>
            Company: <input type="text" name="company" id="company" placeholder="Your Company Name">
            Email: <input type="email" name="email" id="email" placeholder="Your Email Address" required>
            Telephone Number: <input type="number" name="number" id="number" placeholder="Your Contact Number" required>
            Message: <textarea name="enquiry" placeholder="Your Message or Enquiry" rows="10" cols="80"></textarea>
            
            <button type="submit" id="submit-btn">Submit Enquiry</button>
        </form>
        
        <!-- GoogleMaps -->
        <div class="map-container">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=25%20orchard%20drive&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:500px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:500px;}</style></div> </div> 
        </div> <!-- end GoogleMaps -->
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>