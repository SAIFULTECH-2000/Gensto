<?php
class Users extends Controller{
  private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    public function __construct()
    {
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
    }
    public function index(){
      $username=  $_SESSION['username'];
        $sql = "SELECT * from user WHERE username like '$username' limit 1";
        $result = $this->conn->query($sql)->fetch_assoc();
        $this->view('Components/header');
        $this->view('users/profile',$result);
        $this->view('Components/footer');
    }
    public function editprofile(){
       $username=  $_SESSION['username'];
        $sql = "SELECT * from user WHERE username like '$username' limit 1";
        $result = $this->conn->query($sql)->fetch_assoc();
              $this->view('Components/header');
        $this->view('users/editprofile',$result);
        $this->view('Components/footer');
              if($_POST){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $id=$_POST['id'];
            $sql = "UPDATE user SET name='$name',email='$email' WHERE id=$id";
           // var_dump($sql);die();
            if($this->conn->query($sql)==TRUE){
                //jika berjaya
           $baseUrl = baseurl;
           $url = $baseUrl."users";
           header("Location:$url");
           }else{
               echo "error";
           }
      }
    }

}