<?php

class Data {
    
    private $db;

    public function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;dbname=data', 'root', 'masukaja');
    
    }

    public function register($nama, $email, $password)
    {

        $register = "INSERT INTO login(nama, email, password) VALUES(?, ?, ?)";

        $statement = $this->db->prepare($register);
        $statement->execute([$nama, $email, $password]);

        if ($statement) {
            return "berhasil";
        } else {
            return "gagal";
        }

    }

    public function login($email, $password)
    {

        $login = "SELECT * FROM login WHERE email=? AND password=?";

        $statement = $this->db->prepare($login);
        $statement->execute([$email, $password]);
        return $statement;

        if ($statement) {
            return "berhasil";
        } else {
            return "gagal";
        }

    }

    public function input($nama, $email, $nik, $alamat, $password)
    {

        $register = "INSERT INTO login(nama, email, nik, alamat, password) VALUES(?, ?, ?, ?, ?)";

        $statement = $this->db->prepare($register);
        $statement->execute([$nama, $email, $nik, $alamat, $password]);

        if ($statement) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }

    public function list()
    {
        $list = "SELECT * FROM login WHERE NOT id='admin'";

        $statement = $this->db->prepare($list);
        $statement->execute();
        return $statement;

    }

    public function edit($id)
    {

        $tampil = "SELECT * FROM login WHERE id=?";

        $statement = $this->db->prepare($tampil);
        $statement->execute([$id]);
        return $statement;

    }

    public function update($nama, $email, $nik, $alamat, $password, $id)
    {

        $update = "UPDATE login SET nama=?, email=? , nik=?, alamat=? ,password=? WHERE id=?";
        
        $statement = $this->db->prepare($update);
        $statement->execute([$nama, $email, $nik, $alamat, $password, $id]);

        if ($statement) {
            return "berhasil";
        } else {
            return "gagal";
        }

    }

    public function delete($id)
    {

        $delete = "DELETE FROM login WHERE id=?";

        $statement = $this->db->prepare($delete);
        $statement->execute([$id]);

    }

}
