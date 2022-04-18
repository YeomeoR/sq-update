<?php
include "includes/constants.php";

function executSQL( $conn, $sql, $parameters ) {

    $userStmt = $dbconn->prepare($sql);

    $paramString = "";
    foreach ( $parameters as $p) {
        switch gettype($p) {
            case "string" :
                $paramString .= "s";
                break;
            case "integer" :
                $paramString .= "i";
                break;
            case "double" :
                $paramString .= "d";
                break;
            default:
                $paramString .= "s";
                break;
        } 
    }
    if ( $paramString != "" ) {
        $stmt->bind_param($paramString, $parameters);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    //fetching result would go here, but will be covered later
    $stmt->close();
    if ( isset($rows) ) {
        return $rows;
    } else return false;
}