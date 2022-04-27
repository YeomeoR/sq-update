<?php

/** getRecordsSQL gets records from input sql from db
 * @param $conn string database connection 
 * @param $sql string prepared SQL statement to execute
 * @param $conn array parameters to pass into prepared sql
 * 
 * @author Karl
 */
function getRecordsSQL( $conn, $sql, $parameters ) {

    $userStmt = $conn->prepare($sql) or die($conn->error);

    $paramString = "";
    foreach ( $parameters as $p) {
        if ( $p != "" ) {

            switch (gettype($p)) {
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
    }
            
    if ( $paramString != "" ) {
        $userStmt->bind_param($paramString, ...$parameters);
    }

    $userStmt->execute();
    $result = $userStmt->get_result();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    //fetching result would go here, but will be covered later
    $userStmt->close();

    if ( isset($rows) ) {
        return $rows;
    } else return false;
}

/** addRecordsSQL adds records from input sql from db
 * @param $conn string database connection 
 * @param $table string table to add to
 * @param $columns array columns to add values to
 * @param $values array values to add
 * 
 * @author Karl
 */
function addRecordSQL( $conn, $table, $columns, $values ) {

    
    $valueString = "";
    $valueQuestions = array();
    foreach ( $values as $p) {
        array_push( $valueQuestions, "?");
        switch ( gettype($p) ) {
            case "string" :
                $valueString .= "s";
                break;
            case "integer" :
                $valueString .= "i";
                break;
            case "double" :
                $valueString .= "d";
                break;
            default:
                $valueString .= "s";
                break;
        } 
    }

    $userStmt = $conn->prepare("insert into " . $table . "(" . implode(", ", $columns) . ") values (" . implode(", ", $valueQuestions) . ")" );
    if ( $valueString != "" ) {
        $userStmt->bind_param($valueString, ...$values);
    }

    $userStmt->execute();
    $result = $userStmt->get_result();
    $userStmt->close();

    return $result;
}