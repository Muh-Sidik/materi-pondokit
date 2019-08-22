<?php

Class Barang {
    private $database;
    public function __construct()
    {
        $this->database = new PDO('mysql:host=localhost;dbname=barang', "root", 'masukaja');
    }

    public function input($barang, $harga)
    {
        $input = "INSERT INTO list(nama_barang, harga) VALUES(?, ?)";
        $statment = $this->database->prepare($input);
        return $statment->execute([$barang, $harga]);
    }

    public function list()
    {
        $list = "SELECT * FROM list";
        $statment = $this->database->prepare($list);
        $statment->execute();
        return $statment;
        
    }

    public function ubah($id)
    {
        $edit = "SELECT * FROM list WHERE id='$id'";
        $statment = $this->database->prepare($edit);
        $statment->execute();
        return $statment;
        if (!$statment) {
            echo "gagal";
        } else {
            echo "success";
        }
    }

    // public function update($id, $nama_barang, $harga)
    // {
    //     $update = "UPDATE list SET nama_barang=? , harga=$? WHERE id=?";
    //     $statment = $this->database->prepare($update);
    //     $statment->execute([$id, $nama_barang, $harga]);
    //     return $statment;
    //     if (!$statment) {
    //         echo "gagal";
    //     } else {
    //         echo "success";
    //     }
    // }

    // public function delete($id)
    // {
    //     $delete = "DELETE FROM list WHERE id='$id'";
    //     $statment = $this->database->prepare($delete);
    //     $statment->execute();
    // }
}

// $object = new Barang();
// print_r($object->ubah());