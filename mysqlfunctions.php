<?php
require_once('class.mysqlhandler.php');

function emailCollection(){

    $connection = new MySqliConnection('localhost', 'root', '', 'db_alspok');
    $conn = $connection->mySqlConn();

    $tblName = 'tbl_logreg';
    $queryString = 'SELECT * FROM ' . $tblName;
    $stmt = $conn->prepare($queryString);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    
    while($row = $result->fetch_array(MYSQLI_NUM)){
        $emailArray[] = $row;
    }

    return $emailArray;
}

function textCollection(){

    $tblName = 'tbl_logreg';
    $connection = new MySqliConnection('localhost', 'root', '', 'db_alspok');
    $conn = $connection->mySqlConn();

    $tblName = 'tbl_maistas';
    $queryString = 'SELECT product, quantity, notes  FROM ' . $tblName;
    $stmt = $conn->prepare($queryString);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    while($row = $result->fetch_array(MYSQLI_NUM)){
        $textArray[] = $row;
    }

    return $textArray;
}

function arrayToString($textArray){

    $outString = '';
    foreach($textArray as $textItem){
        $tempString = implode(' ', $textItem);
        $outString .= $tempString . PHP_EOL;
    }

    return $outString;
}
