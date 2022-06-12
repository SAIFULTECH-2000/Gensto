<?php 

class Welcome extends Controller{
    public function __construct()
    {
        $this->db = new Database;
    }
    public function index()
    {
        $this->view('welcome/index');
        $this->view('welcome/test');
    }
}