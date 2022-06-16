<?php
class Quotation extends Controller{
    public function index(){
        $this->view('Components/header');
        $this->view('Quotation/index');
        $this->view('Components/footer');
    }
    public function generate(){
        $this->view('Components/header');
        $this->view('Quotation/Generate');
        $this->view('Components/footer');
    }
    public function download(){
        $this->view('Components/header');
        $this->view('Quotation/Download');
        $this->view('Components/footer');
    }

    public function delete(){
        $this->view('Components/header');
        $this->view('Quotation/Delete');
        $this->view('Components/footer');
    }
}
        