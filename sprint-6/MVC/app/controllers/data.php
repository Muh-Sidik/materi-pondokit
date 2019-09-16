<?php

class Data extends Controller
{

    public function index()
    {
        if(!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'/login');
        }
        $data['judul'] = 'Data Santri';
        $data['data'] = $this->model('Santri_model')->getAllData();
        $this->view('template/header', $data);
        $this->view("data/index", $data);
        $this->view('template/footer');
    }

    
    public function detail($id)
    {
        if(!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'/login');
        }
        $data['judul'] = "Data Santri";
        $data['oneData'] = $this->model('Santri_model')->getOneData($id);
        $this->view('template/header', $data);
        $this->view('data/detail', $data);
        $this->view('template/footer');

    }
    
    public function tambah()
    {
        if($this->model('Santri_model')->tambahDataSantri($_POST) > 0) {
            Message::setFlash('Berhasil', 'ditambahkan!', 'success');
            header('Location: ' . BASEURL . '/data');
            exit;
        } else {
            Message::setFlash('Gagal', 'ditambahkan!', 'danger');
            header('Location: ' . BASEURL . '/data');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Santri_model')->hapusDataSantri($id) > 0) {
            Message::setFlash('Berhasil', 'dihapus!', 'success');
            header('Location: ' . BASEURL . '/data');
            exit;
        } else {
            Message::setFlash('Gagal', 'dihapus!', 'danger');
            header('Location: ' . BASEURL . '/data');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Santri_model')->getOneData($_POST['id']));
    }

    public function ubah()
    {
        if($this->model('Santri_model')->ubahDataSantri($_POST) > 0) {
                Message::setFlash('Berhasil', 'diubah!', 'success');
                header('Location: ' . BASEURL . '/data');
            exit;
        } else {
                Message::setFlash('Gagal', 'diubah!', 'danger');
                header('Location: ' . BASEURL . '/data');
            exit;
        }
    }


    public function logout()
    {
        $this->view('data/logout');
    }
}
