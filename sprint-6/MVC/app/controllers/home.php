<?php

class Home extends Controller {
    
    public function index()
    {
        if(isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'/data');
        }
        $data['judul'] = 'Home';
        $this->view('template/header', $data);
        $this->view("home/index");
        $this->view('template/footer');
    }
}