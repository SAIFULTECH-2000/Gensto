<?php
class Customer extends Controller{
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
         $sql = "SELECT * from customer where companyid like '$id' ";
               $data['result'] = $this->conn->query($sql);
        $this->view('Components/header');
        $this->view('Customer/index',$data);
        $this->view('Components/footer');
    }
    public function register(){
      if($_POST){
         $username=  $_SESSION['username'];
        $nama=$_POST['nama'];
        $address = $_POST['address'];
        $shipaddress = $_POST['shipaddress'];
         $query= "SELECT company.id FROM user inner join company on company.userid = user.id where username like '$username'  limit 1";
                $result = $this->conn->query($query); 
                $id = 0;
                while($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                }
        $sql = "INSERT INTO customer (nama,address,shipaddress,companyid)
            VALUES ('$nama', '$address', '$shipaddress','$id')";

            if($this->conn->query($sql)==TRUE){
                $baseUrl = baseurl;
           $url = $baseUrl."Customer";
           header("Location:$url");
            }else{
              echo "error";

            }
      }
           $this->view('Components/header');
           $this->view('Customer/register');
            $this->view('Components/footer');
    }
    public function profile($id){
         $sql = "SELECT * from customer WHERE id like '$id' limit 1";
        $result = $this->conn->query($sql)->fetch_assoc();
         $this->view('Components/header');
           $this->view('Customer/profile',$result);
            $this->view('Components/footer');
    }
    public function kemaskini($id=null){
        
           $sql = "SELECT * from customer WHERE id like '$id' limit 1";
        $result = $this->conn->query($sql)->fetch_assoc();
         $this->view('Components/header');
           $this->view('Customer/kemaskini',$result);
            $this->view('Components/footer');
            if($_POST){
        
            $name=$_POST['nama'];
            $address=$_POST['address'];
            $shipaddress=$_POST['shipaddress'];
    
            $sql = "UPDATE customer SET nama='$name',address='$address',shipaddress='$shipaddress' WHERE id=$id";
          //  var_dump($sql);die();
                        if($this->conn->query($sql)==TRUE){
                //jika berjaya
           $baseUrl = baseurl;
           $url = $baseUrl."Customer/";
           header("Location:$url");
           }else{
               echo "error";
           }

        }
    }
    public function delete($id){
$sql = "DELETE FROM customer WHERE id=$id";

if ($this->conn->query($sql) === TRUE) {
      $baseUrl = baseurl;
           $url = $baseUrl."Customer/";
           header("Location:$url");
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $this->conn->error;
}
    }
}
?>