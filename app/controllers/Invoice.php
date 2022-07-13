<?php
class Invoice extends Controller{

    public function index(){
         $this->view('Components/header');
        $this->view('Invoice/Index');
         $this->view('Components/footer');
    }
}