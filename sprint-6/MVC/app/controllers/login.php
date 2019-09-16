<?php


class Login extends Controller
{
    public function index()
    {
        if(isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'/data');
        }
        $data['judul'] = "Sign In";
        $this->view('template/header', $data);
        $this->view('login/index');
        $this->view('template/footer');
        
    }

    public function done()
    {
        if($this->model('User_model')->getAllData($_POST) == true) {
            $_SESSION['user'] = true;
            if(isset($_POST['remember'])) {
                $user = hash('sha256', $_POST['email']);
                setcookie('key', $user, time()+3600);
            }
            header('Location: ' . BASEURL . '/data');
            
        }
    }

    public function register()
    {
        if($this->model('User_model')->takeData($_POST) > 0) {
            Message::setFlash('Berhasil', 'didaftarkan!', 'success');
            header('Location: ' . BASEURL . '/login');
            exit;
        } else {
            Message::setFlash('Gagal', 'didaftar!', 'danger');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }
}