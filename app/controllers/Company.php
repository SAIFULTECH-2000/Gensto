<?php
        class Company extends Controller{
            public function index(){
                $this->view('Components/header');
                $this->view("Company/index");
                $this->view('Components/footer');


            }

            public function register(){
                $this->view('Components/header');
                $this->view("Company/register_C");
                $this->view('Components/footer');
            }
        }
        