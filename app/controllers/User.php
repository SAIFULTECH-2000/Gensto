<?php
class User extends Controller{
    public function index(){
        $this->view('Components/header');
        $this->view('User/index');
        $this->view('Components/footer');
    }
    public function profile(){

    }
    public function kemaskini(){
        
    }
}
        