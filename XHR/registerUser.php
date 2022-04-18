<?php

include 'includes/constants.php';

$fore = $_POST['fore'];
$sur = $_POST['sur'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$companySect = $_POST['companySect'];
$govtSect = $_POST['govtSect'];


$stmt = $dbconn->prepare("SELECT * FROM user WHERE Email = ?");
$stmt->bind_param("si", $_POST['Email']);
$stmt->execute();
while($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

$stmt->close();

if ( $rows !== false ) {
    $pepper = "a00sRRk1knf4oV9wnsMRyx2mx";
    
    $salt = uniqid();

}
echo json_encode(array( 'status' => true, 'msg' => "Thank you for registering, please login to continue!"));
