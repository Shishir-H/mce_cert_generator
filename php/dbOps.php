<?php

include './config.php';

class Mysql extends Dbconfig    {

    public $connectionString;
    public $dataSet;
    private $sqlQuery;
    
        protected $databaseName;
        protected $hostName;
        protected $userName;
        protected $passCode;
    
    function Mysql()    {
        $this -> connectionString = NULL;
        $this -> sqlQuery = NULL;
        $this -> dataSet = NULL;
    
                $dbPara = new Dbconfig();
                $this -> databaseName = $dbPara -> dbName;
                $this -> hostName = $dbPara -> serverName;
                $this -> userName = $dbPara -> userName;
                $this -> passCode = $dbPara ->passCode;
                $dbPara = NULL;
    }
    
    function dbConnect()    {
        $this -> connectionString = mysqli_connect($this -> serverName,$this -> userName,$this -> passCode);
        mysqli_select_db($this -> connectionString,$this -> databaseName);
        return $this -> connectionString;
    }
    
    function dbDisconnect() {
        $this -> connectionString = NULL;
        $this -> sqlQuery = NULL;
        $this -> dataSet = NULL;
                $this -> databaseName = NULL;
                $this -> hostName = NULL;
                $this -> userName = NULL;
                $this -> passCode = NULL;
    }   
    
    function selectAll($tableName)  {
        $this -> sqlQuery = 'SELECT * FROM '.$this -> databaseName.'.'.$tableName;
        $this -> dataSet = mysqli_query($this -> connectionString,$this -> sqlQuery);
        // echo mysqli_error($this -> connectionString);     
        return $this -> dataSet;
    }
    
    function selectWhere($tableName,$rowName,$operator,$value,$valueType)   {
        $this -> sqlQuery = 'SELECT * FROM '.$tableName.' WHERE '.$rowName.' '.$operator.' ';
        if($valueType == 'int') {
            $this -> sqlQuery .= $value;
        }
        else if($valueType == 'char')   {
            $this -> sqlQuery .= "'".$value."'";
        }
        $this -> dataSet = mysqli_query($this -> sqlQuery,$this -> connectionString);
        $this -> sqlQuery = NULL;
        return $this -> dataSet;
        #return $this -> sqlQuery;
    }
    
    function insertInto($tableName,$values) {
        $i = NULL;
    
        $this -> sqlQuery = 'INSERT INTO '.$tableName.' VALUES (';
        $lastElement = end($values);

        foreach ($values as $key => $value)    {
            $this -> sqlQuery .= "'";
            $this -> sqlQuery .= $value;
            if($value != $lastElement)   {
                $this -> sqlQuery .= "',";
            }
            else{
                $this -> sqlQuery .= "'";
            }
        }
        $this -> sqlQuery .= ')';
                #echo $this -> sqlQuery;
        mysqli_query($this ->connectionString,$this -> sqlQuery);
        echo mysqli_error($this ->connectionString);        
        return $this -> sqlQuery;
        #$this -> sqlQuery = NULL;
    }
    
    function selectFreeRun($query)  {
        $this -> dataSet = mysqli_query($this -> connectionString,$query);
        return $this -> dataSet;
    }
    
    function freeRun($query)    {
        return mysqli_query($query,$this -> connectionString);
      }
    }
?>