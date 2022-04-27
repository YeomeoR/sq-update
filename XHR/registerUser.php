<?php

include 'includes/basics.php';

$fore = $_POST['fore'];

$sur = $_POST['sur'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$companySect = $_POST['companySect'];
$govtSect = $_POST['govtSect'];

$rows = getRecordsSQL($dbconn, "SELECT * FROM user WHERE Email = ?", array($email));

// $stmt = $dbconn->prepare("SELECT * FROM user WHERE Email = ?");
// $stmt->bind_param("si", $_POST['Email']);
// $stmt->execute();
// while($row = $result->fetch_assoc()) {
//     $rows[] = $row;
// }

// $stmt->close();

if ( $rows !== false ) {
    $pepper = "a00sRRk1knf4oV9wnsMRyx2mx";
    $salt = uniqid();
    
    $pass = $salt . $pass . $pepper;

    for ( $i = 0; $i < 10; ++$i) {
        $pass = hash("sha512", $pass);
    }


    addRecordSQL( $dbconn, "user",  array( "Forename", "Surname", "Email", "WorkPhone", "Company", "CompanySector", "GovtSector"),  
                                    array( $fore, $sure, $email, $phone, $company, $companySect, $govtSect ) );
    $ID = getRecordsSQL( $dbconn, "select ID where email = ?", array($email) )[0]["ID"];

    addRecordSQL( $dbconn, "password", array( $ID, $pass, $salt) );

}
echo json_encode(array( 'status' => true, 'msg' => "Thank you for registering, please login to continue!"));
