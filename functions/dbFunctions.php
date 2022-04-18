<?php

/** getRecordsSQL gets records from input sql from db
 * @param $conn string database connection 
 * @param $sql string prepared SQL statement to execute
 * @param $conn array parameters to pass into prepared sql
 * 
 * @author Karl
 */
function getRecordsSQL( $conn, $sql, $parameters ) {

    $userStmt = $conn->prepare($sql);

    $paramString = "";
    foreach ( $parameters as $p) {
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

/** addRecordsSQL adds records from input sql from db
 * @param $conn string database connection 
 * @param $table string table to add to
 * @param $columns array columns to add values to
 * @param $values array values to add
 * 
 * @author Karl
 */
function addRecord( $conn, $table, $columns, $values ) {

    
    $valueString = "";
    $valueQuestions = array();
    foreach ( $values as $p) {
        append( $valueQuestions, "?");
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

    $userStmt = $conn->prepare("insert into " . $table . "(" . implode(", ", $columns) . " values" . implode(", ", $valueQuestions) );
    if ( $valueString != "" ) {
        $stmt->bind_param($valueString, $values);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    return $result;
}