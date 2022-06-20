<?php
class User extends Controller{
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
        //error searching
        if($_POST){
            $name=$_POST['search']; 
            $data['search']=$_POST['search']; 
            $sql = "SELECT * from user  inner join company on company.userid = user.id where name like '$name' ";
            $data['result'] = $this->conn->query($sql);
        }else{
            $sql = "SELECT * from user  inner join company on company.userid = user.id ";
            $data['result'] = $this->conn->query($sql);
        }

      
        
        $this->view('Components/header');
        $this->view('User/index',$data);
        $this->view('Components/footer');
    }
    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/",$url);
            return $url;
        }
    }
    public function register(){
        //Kena buat validation untuk check username or email is take or not 
        $this->view('Components/header');
        $this->view('User/Register');
        $this->view('Components/footer');
        if($_POST){
            $username = $_POST['username'];
            $name=$_POST['name'];
            $role=$_POST['role'];
            $email=$_POST['email'];
            $isdelete="SHOW";
            $password = password_hash("abc123", PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (username, password, email,role,isdelete,name)
            VALUES ('$username', '$password', '$email','$role','$isdelete','$name')";

            if($this->conn->query($sql)==TRUE){
                 //jika berjaya
            $baseUrl = baseurl;
            $url = $baseUrl."user";
            header("Location:$url");
            }else{
                echo "error";
            }

            //Irsyad nanti tambah sini
            //mula2 kau buat get userid where from user table
            //kau save userid and insert dekat company nanti.

           
        }
    }
    
    public function profile($id){
        $sql = "SELECT * from user WHERE id like '$id' limit 1";
        $result = $this->conn->query($sql)->fetch_assoc();
        $this->view('Components/header');
        $this->view('User/Profile',$result);
        $this->view('Components/footer');
    }

    public function kemaskini($id=null){
        $sql = "SELECT * from user WHERE id like '$id' limit 1";
        $result = $this->conn->query($sql)->fetch_assoc();
        $this->view('Components/header');
        $this->view('User/kemaskini',$result);
        $this->view('Components/footer');
        if($_POST){
            $username = $_POST['username'];
            $name=$_POST['name'];
            $role=$_POST['role'];
            $email=$_POST['email'];
            $id=$_POST['id'];
            $sql = "UPDATE user SET name='$name',username='$username',email='$email',role='$role' WHERE id=$id";
            if($this->conn->query($sql)==TRUE){
                //jika berjaya
           $baseUrl = baseurl;
           $url = $baseUrl."user";
           header("Location:$url");
           }else{
               echo "error";
           }

        }
    }
    public function delete(){
            if($_POST){
                $id= $_POST["id"];
                $sql = "UPDATE user SET isdelete='inactive' WHERE id=$id";
                if($this->conn->query($sql)==TRUE){
                    //jika berjaya
               $baseUrl = baseurl;
               $url = $baseUrl."user";
               header("Location:$url");
               }else{
                   echo "error";
               }
            }else{
                $baseUrl = baseurl;
                $url = $baseUrl."user";
                header("Location:$url");
            }
    }
}
        