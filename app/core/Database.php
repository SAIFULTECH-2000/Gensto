<?php 

Class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    private $conn;
    private $query;
    public function __construct(){
        $user=$this->user;
        $host=$this->host;
        $password=$this->password;
        $database=$this->database;
        
        
        $conn = mysqli_connect($host,$user,$password,$database);
        $this->conn=$conn;
        // Check connection
        if (!$this->conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";
    }
  
public function get($tablename){
    $this->query="Select * from ".$tablename;
  

}
public function result_array(){
    return $this->conn->query($this->query)->fetch_assoc(); 
}

public function get_where($tablename,$data){
     $this->query="Select * from ".$tablename." where ";
    $i=0;
   foreach ($data as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    if($i>=1)
    $this->query .=" and ";
    $this->query .="{$key} like '{$value}' ";
   $i++;
    }
}

public function insert($tablename,$data){

 $query = "INSERT INTO ".$tablename."(";
 $i=0;
    foreach ($data as $key => $value) {
    if($i>=1)
   $query .=",";
   $query .="{$key}";
   $i++;
    }
    $query.=") value(";
    $j=0;
    foreach ($data as $key => $value) {
         if($j>=1)
   $query .=",";
   $query .="'{$value}'";
   $j++;
    }
    $query.=")";
    $this->query=$query;
   
}
public function updated($tablename,$data, $where){

    $query = "UPDATE " .$tablename." set ";
    $i=0;
      foreach ($data as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    if($i>=1)
   $query .=",";
   $query .="{$key}='{$value}' ";
   $i++;
    }
    $j=0;
    $query .=" where ";
     foreach ($where as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    if($j>=1)
   $query .=" and ";
   $query .="{$key} like '{$value}' ";
   $j++;
    }
    $this->query = $query;
   
      
}
public function execute(){
    $this->conn->query($this->query);
}

}