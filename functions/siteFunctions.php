<?php
// for DB stuff: https://websitebeaver.com/prepared-statements-in-php-mysqli-to-prevent-sql-injection

function setSession() {

    if ( !isset($_SESSION) ) {
        session_start();
        // $_SESSION['status'] => "guest";
        // $_SESSION['sessionID'] => uniqid();
    } 

}
