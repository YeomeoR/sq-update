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
    <form action="sendEmail.php" method="POST" id="contact-form">

        Name: <input type="text" name="name" id="name" placeholder="Your Name" required>
        Company: <input type="text" name="company" id="company" placeholder="Company Name">
        Email: <input type="email" name="email" id="email" placeholder="Your Email Address" required>
        Telephone Number: <input type="number" name="number" id="number" placeholder="Your Contact Number" required>
        Message: <textarea name="enquiry" placeholder="Message or Enquiry" rows="20" cols="100"></textarea>

        <button type="submit" id="submit-btn">Submit Enquiry</button>
    </form>
<?php

// if (isset($_POST['submit'])){

//     $name = $_POST['name'];
//     $company = $_POST['company'];
//     $email = $_POST['email'];
//     $number = $_POST['number'];
//     $enquiry = $_POST['enquiry'];
//     $messageBody = '
//         <html>
//         <head>
//         <title>SquareGain Enquiry Form</title>
//         </head>
//         <body>
//         <p>This is a copy of your enquiry to Square Gain</p>
//         <table>
//         <tr>
//         <th>Thank you for getting in contact with us, ' . $name .' from ' . $company .'.</th>
//         </tr>
//         <tr>
//         <td>This is a copy of your message: </td>
//         </tr>
//         <tr>
//         <td>Message: ' . $enquiry . '</td>
//         </tr>
//         </table>
//         </body>
//         </html>
//         ';
//     $headers[] = 'Cc: robyeomans1@gmail.com';

//     var_dump('Name: ' . $name . ', Company: ' . $company . ', Email: ' . $email . ', Number: ' . $number . 'Message: ' . $enquiry);
    
//     $to = $email;
//     $subject = "Email enquiry from SG website";
//     $message = $messageBody;

//     mail($email, $subject, $message, implode("\r\n", $headers) );
//     echo 'mail has been sent to ' . $headers . ' and ' . $email . '.';
// }
?>
    <div class="map-container">
        <!-- GoogleMaps -->
        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=25%20orchard%20drive&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
        <!-- end GoogleMaps -->
    </div>
</body>
</html>