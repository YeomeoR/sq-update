<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <title>Contact Us</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" id="contact-form">

        Name: <input type="text" name="name" id="name" placeholder="Your Name" required>
        Company: <input type="text" name="company" id="company" placeholder="Company Name">
        Email: <input type="email" name="email" id="email" placeholder="Your Email Address" required>
        Telephone Number: <input type="number" name="number" id="number" placeholder="Your Contact Number" required>
        Message: <textarea name="message" placeholder="Message or Enquiry" rows="20" cols="100"></textarea>

        <button type="submit" id="submit-btn">Submit Enquiry</button>
    </form>
<?php
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    var_dump('Name: ' . $name . ', Company: ' . $company . ', Email: ' . $email . ', Number: ' . $number . 'Message: ' . $message);
?>
    <div class="map-container">
        <!-- GoogleMaps -->
        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=25%20orchard%20drive&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
        <!-- end GoogleMaps -->
    </div>
</body>
</html>