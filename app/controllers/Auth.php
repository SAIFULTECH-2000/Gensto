<?php
class Auth extends Controller{
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
    $this->view('auth/index');
    }
    public function login(){
        if(!$_POST){
            header("Location:index.php");
        }else{
            $baseUrl = baseurl;
            $username=$_POST['username'];
            $password=$_POST['password'];
            $sql = "SELECT * from user WHERE username like '$username' limit 1";
            $result = $this->conn->query($sql)->fetch_assoc();
            if($result){
                if(password_verify($password,$result['password'])){
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $result['role'];
                    $dashboard = $baseUrl."Dashboard";
                    $user=$baseUrl."Users/Profile";
                    if($result['role']=="Admin")
                    header("Location:$dashboard");
                    else
                    header("Location:$user");
                }else{
                    header("Location:index.php");
                }
            }else{
                header("Location:index.php");
            }
        }
    }
    public function logout(){
        session_destroy();
         $baseUrl = baseurl;
         header("Location:$baseUrl");
    }
}
        