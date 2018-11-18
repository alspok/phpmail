<?php

class MySqliConnection{

    private $hostName;
    private $userName;
    private $password;
    private $dbName;

    function __construct($hostName, $userName, $password, $dbName){

        $this->hostName = $hostName;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
    }

    public function mySqlConn(){

        return $this->conn;
    }

    public function tableView($tblName, $queryString){

        $query = $this->conn->query($queryString);
        
        return $query;
    }

    public function tableInsert($tblName, $regData){

        $queryString = 'INSERT INTO ' . $tblName . ' (username, password, email, phone) VALUES (?, ?, ?, ?)';
        $query = $this->conn->prepare($queryString);
        $query->bind_param('ssss', $regData['regname'], $regData['regpassword'], $regData['regemail'], $regData['regphone']);
        $query->execute();
        $query->close();

        return true;
    }

    public function tableDelete($tblName){
        
    }
}