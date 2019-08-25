<?php

class Crud
{   
    private $dbconnect;
    public function __construct()
    {
        $this->dbconnect = new PDO('mysql:host=localhost;dbname=crud_login', 'root', 'masukaja');
    }

    public function register($nama, $email, $password)
    {
        $insert = "INSERT INTO masuk (nama, email, password) VALUES ('$nama', '$email', '$password')";
        $statement = $this->dbconnect->prepare($insert);
        $statement->execute();
        // var_dump($data);
        if ($statement) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }

    public function login($email, $password)
    {
        $login = "SELECT * FROM masuk WHERE email='$email' AND sandi='$password'";
        $statement = $this->dbconnect->prepare($login);
        $statement->execute();
        return $statement;

        if ($statement) {
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }

    public function list()
    { 
        $list = "SELECT * FROM masuk";
        $statement = $this->dbconnect->prepare($list);
        $statement->execute();
        return $statement;
    }

    public function tampil($id)
    {
        $tampil = "SELECT * FROM masuk WHERE id=?";
        $statement = $this->dbconnect->prepare($tampil);
        $statement->execute([$id]);
        return $statement;

    }

    public function update($nama, $email, $id)
    {
        $update = "UPDATE masuk SET nama=?, email=? WHERE id=?";
        $statement = $this->dbconnect->prepare($update);
        $statement->execute([$nama, $email, $id]);

        if ($statement == true) {
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }

    public function delete($id)
    {
        $delete = "DELETE FROM masuk WHERE id=?";
        $statement = $this->dbconnect->prepare($delete);
        $statement->execute([$id]);
    }
}

// $obj = new Crud();
// var_dump($obj->register('sidik', 'sidik@sidik.com', 'aku'));
