<?php
class Customer extends Controller{
    public function index(){
        $this->view('Components/header');
        $this->view('Customer/index');
        $this->view('Components/footer');
    }
    public function profile(){

    }
    public function kemaskini(){
        
    }
}
?>