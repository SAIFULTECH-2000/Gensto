<?php
class Company extends Controller
{
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

    public function index()
    {
        
        $results = $this->select("company");
        $data = $results;

        $this->view('Components/header');
        $this->view("Company/index", $data);
        $this->view('Components/footer');
    }

    public function register()
    {
        $this->view('Components/header');
        $this->view("Company/register_C");
        $this->view('Components/footer');
    }

    public function select($tbname)
    {
        $sql = "SELECT * FROM $tbname;";
        $results = $this->conn->query($sql);
        return $results;
    }
    public function deres(){

        $results = $this->delete("company");
    }
    public function delete($tbname){
        echo "hi";
        $id = $_POST['id'];
        $sql = "DELETE FROM $tbname where id=$id;";
        $results = $this->conn->query($sql);
        $furl=baseurl.$tbname;
        header("Location:$furl");
        


    }
}
