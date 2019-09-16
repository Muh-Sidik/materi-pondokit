<?php

class Santri_model
{
    private $table = 'data';
    private $dbh;

    public function __construct()
    {
        $this->dbh = new Database;
    }

    public function getAllData()
    {
        $all = 'SELECT * FROM ' . $this->table;
        $this->dbh->query($all);
        return $this->dbh->resultSet();
    }

    public function getOneData($id)
    {
        $single = 'SELECT * FROM ' . $this->table . ' WHERE id= :id';
        $this->dbh->query($single);
        $this->dbh->bind('id', $id);
        return $this->dbh->singleSet();
        
    }

    public function tambahDataSantri($data)
    {
        $query = "INSERT INTO ". $this->table ." (nama, email, nik, alamat, asal, password) VALUES (:nama, :email, :nik, :alamat, :asal, :password)";
        $this->dbh->query($query);
        $this->dbh->bind('nama', $data['nama']);
        $this->dbh->bind('email', $data['email']);
        $this->dbh->bind('nik', $data['nik']);
        $this->dbh->bind('alamat', $data['alamat']);
        $this->dbh->bind('asal', $data['asal']);
        $this->dbh->bind('password', $data['password']);
        
        $this->dbh->execute();

        return $this->dbh->rowCount();
        
    }

    public function hapusDataSantri($id)
    {
        $hapus = "DELETE FROM data WHERE id = :id";
        $this->dbh->query($hapus);
        $this->dbh->bind('id', $id);

        $this->dbh->execute();

        return $this->dbh->rowCount();
    }

    public function ubahDataSantri($data)
    {
        $update = 'UPDATE data SET nama=:nama, email=:email, nik=:nik, alamat=:alamat, asal=:asal, password=:password WHERE id=:id';
        $this->dbh->query($update);
        $this->dbh->bind('nama', $data['nama']);
        $this->dbh->bind('email', $data['email']);
        $this->dbh->bind('nik', $data['nik']);
        $this->dbh->bind('alamat', $data['alamat']);
        $this->dbh->bind('asal', $data['asal']);
        $this->dbh->bind('password', $data['password']);
        $this->dbh->bind('id', $data['id']);

        $this->dbh->execute();

        return $this->dbh->rowCount();
    }

    
}