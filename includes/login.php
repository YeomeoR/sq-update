
<?php 
session_start();
include 'loginFunctions.php';

$_SESSION['status'] = "guest";

$user = 'root';
$pass = '';
$dbName   = 'squaregain';

$db = new mysqli('localhost', 'root', '', 'squaregain') or die("Unable to connect to db");

echo "DB connection complete";

var_dump(mysqli_query($db, "select * from user"));
