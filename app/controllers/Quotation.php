<?php
class Quotation extends Controller{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    public function __construct()
    {
        $user = $this->user;
        $host = $this->host;
        $password = $this->password;
        $database = $this->database;
        $conn = mysqli_connect($host, $user, $password, $database);
        $this->conn = $conn;
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    public function index(){
        $username=  $_SESSION['username'];
        $query= "SELECT company.id FROM user inner join company on company.userid = user.id where username like '$username'  limit 1";
     
        $result = $this->conn->query($query); 
             $id = 0;
             while($row = $result->fetch_assoc()) {
                 $id = $row['id'];
             }
             $sql = "SELECT quotation.id,customer.nama,quotation.date,quotation.duedate from quotation inner join customer on customer.id = quotation.customerid where quotation.companyid like '$id' ";
             $data['result'] = $this->conn->query($sql);
             
        $this->view('Components/header');
        $this->view('Quotation/index',$data);
        $this->view('Components/footer');
    }
    public function Create(){
       
        $username=  $_SESSION['username'];
        $query= "SELECT company.id FROM user inner join company on company.userid = user.id where username like '$username'  limit 1";
     
        $result = $this->conn->query($query); 
             $id = 0;
             while($row = $result->fetch_assoc()) {
                 $id = $row['id'];
             }
      $sql = "SELECT * from customer where companyid like '$id' ";
            $data['result'] = $this->conn->query($sql);
            if($_POST){
               $date = $_POST['date'];
               $duedate = $_POST['duedate'];
               $customerid = $_POST['customerid'];
               $companyid = $id;
               $sql = "INSERT INTO quotation (date,customerid,companyid,duedate)
               VALUES ('$date', '$customerid', '$companyid', '$duedate')";
                 if($this->conn->query($sql)==TRUE){
                    $baseUrl = baseurl;
                    
                    $url = $baseUrl."Quotation/details/$customerid/$date";
               header("Location:$url");
                }else{
                  echo "error";
    
                }
            }
        $this->view('Components/header');
        $this->view('Quotation/Create',$data);
        $this->view('Components/footer');
       
    }
    public function generate($id){
        $data['id']= $id;
        $sql = "SELECT * from quotation inner join customer on customer.id = quotation.customerid where quotation.id like '$id' limit 1 ";
        $data['result'] = $this->conn->query($sql)->fetch_assoc();
        $username=  $_SESSION['username'];
        $sql = "SELECT * from user inner join company  on company.userid = user.id WHERE username like '$username' limit 1";
        $data['user']= $this->conn->query($sql)->fetch_assoc();
        $sql = "SELECT * from quo_details where quoid = $id ";
        $data['result2'] = $this->conn->query($sql);
        
        $this->view('Components/header');
        $this->view('Quotation/generate',$data);
        $this->view('Components/footer');
    }

    public function details($customerid,$date){
       
       $sql = "SELECT * from customer where id like '$customerid' ";
        $data['result'] = $this->conn->query($sql);
        $data['date']=$date;
        $data['customerid']=$customerid; 
        $query= "SELECT id FROM quotation where customerid like '$customerid' and date like '$date' limit 1 ";
     
        $result = $this->conn->query($query); 
             $id = 0;
             while($row = $result->fetch_assoc()) {
                 $id = $row['id'];
             }
            
        if($_POST){
           $description = $_POST['description'];
            $unit = $_POST['unit'];
            $qty = $_POST['qty'];
            $qouid = $id;
            $sql = "INSERT INTO quo_details (description, unit, qty,quoid)VALUES ('$description', '$unit', '$qty', $qouid)";
            //var_dump($sql);die();
                 if($this->conn->query($sql)==TRUE){
                    $baseUrl = baseurl;
                    
                    $url = $baseUrl."Quotation/details/$customerid/$date";
               header("Location:$url");
                }else{
                  
                  echo "error";
    
                }
        }
        $this->view('Components/header');
        $this->view('Quotation/details',$data);
        $this->view('Components/footer');
    }
}
        