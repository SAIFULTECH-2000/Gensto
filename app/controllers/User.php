<?php
class User extends Controller{
    public function index(){
        $this->view('Components/header');
        $this->view('User/index');
        $this->view('Components/footer');
    }
    public function register(){
        $this->view('Components/header');
        $this->view('User/Register');
        $this->view('Components/footer');
    }
    public function profile(){
        $this->view('Components/header');
        $this->view('User/Profile');
        $this->view('Components/footer');
    }

    public function kemaskini(){

    }
}
        