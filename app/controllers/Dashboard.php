<?php
class Dashboard extends Controller{

    public function index(){
           $this->view('Components/header');
        $this->view('Dashborad/index');
           $this->view('Components/footer');
    }
}