<?php
require_once('class.mysqlhandler.php');

function emailCollection(){

    $connection = new MySqliConnection('localhost', 'root', '', 'db_maistas');
    $conn = $connection->mySqlConn();

    $tblName = 'tbl_logreg';
    $queryString = 'SELECT * FROM ' . $tblName;
    $stmt = $conn->prepare($queryString);
    $stmt->execute();
    $result = $stmt->get_result();
    
    while($row = $result->fetch_assoc()){
        $emailArray[] = $row['email'];
    }

    return $emailArray;
}

function textCollection(){

    $connection = new MySqliConnection('localhost', 'root', '', 'db_maistas');
    $conn = $connection->mySqlConn();

    $tblName = 'tbl_maistas';
    $queryString = 'SELECT product, quantity, notes  FROM ' . $tblName;
    $stmt = $conn->prepare($queryString);
    $stmt->execute();
    $result = $stmt->get_result();

    while($row = $result->fetch_array(MYSQLI_NUM)){
        $textArray[] = $row;
    }

    return $textArray;
}

function arrayToString($textArray){

    $outString = '';
    $i = 0;
    foreach($textArray as $textItem){
        if($i == 0){
            $i = 1;
            continue;
        }
        else{
            $tempString = implode(' ', $textItem);
            $outString .= $tempString . PHP_EOL;
        }
    }

    // for($i = 1; $i < sizeof($textArray); $i++){
    //     $tempString = implode(' ', $textArray[i]);
    //     $outString .= $tempString . PHP_EOL;
    // }

    return $outString;
}
