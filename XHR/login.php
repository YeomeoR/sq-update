
<?php 
include_once 'includes/constants.php';
include_once 'loginFunctions.php';

echo json_encode( array( "success" => login( $dbconn, $_GET['name'], $_GET['pass'] ) ) );