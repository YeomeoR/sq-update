<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>
<body>
    


<?php

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $enquiry = $_POST['enquiry'];
    $messageBody = '
        <html>
        <head>
        <title>SquareGain Enquiry Form</title>
        </head>
        <body>
        <p>This is a copy of your enquiry to Square Gain</p>
        <table>
        <tr>
        <th>Thank you for getting in contact with us, ' . $name .' from ' . $company .'.</th>
        </tr>
        <tr>
        <td>This is a copy of your message: </td>
        </tr>
        <tr>
        <td>Message: ' . $enquiry . '</td>
        </tr>
        </table>
        </body>
        </html>
        ';
    $headers[] = 'Cc: robyeomans1@gmail.com';
    $headers[] = 'From: robyeomans1@gmail.com';

    var_dump('Name: ' . $name . ', Company: ' . $company . ', Email: ' . $email . ', Number: ' . $number . 'Message: ' . $enquiry);
    
    $to = $email;
    $subject = "Email enquiry from SG website";
    $message = $messageBody;

    mail($email, $subject, $message, implode("\r\n", $headers) );


}

?>

</body>
</html>