<?php

/** check the userID is valid and get user info
 * if logged in, set session vars for user details:
 * $_SESSION['userForename'], $_SESSION['userSurename'], $_SESSION['userCompany'], $_SESSION['userEmail']
 * 
 * @return true or false if user is valid or not
 */
function checkLogin( $dbconn )  {

    $user = false;

    if ( array_key_exists( 'status', $_SESSION ) ) {

        if ( $_SESSION['status'] == "user") {

            $id = $_SESSION['userID'];
        
            $userStmt = $dbconn->prepare("SELECT * FROM user WHERE ID is not NULL and ID = ?");
            $stmt->bind_param("si", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()) {
                $_SESSION['userForename'] = $row['Forename'];
                $_SESSION['userSurename'] = $row['Surname']; // deliberate spelling? register.js uses ['surname']
                $_SESSION['userCompany'] = $row['Company'];
                $_SESSION['userEmail'] = $row['Email'];
                $user = true;
            }
            //fetching result would go here, but will be covered later
            $stmt->close();
        
        }
    }
    
    if ( $user == false ) {
        $_SESSION['status'] == "guest";
    }

    return $user;
}