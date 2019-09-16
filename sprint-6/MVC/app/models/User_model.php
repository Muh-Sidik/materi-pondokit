<?php

class User_model
{
    private $table = "data";
    private $dbh;

    public function __construct()
    {
        $this->dbh = new Database;
    }

    public function getAllData($data)
    {
        $all = 'SELECT * FROM data WHERE email= :email AND password= :password';
        $this->dbh->query($all);
        $this->dbh->bind('email', $data['email']);
        $this->dbh->bind('password', $data['password']);
        
        $this->dbh->execute();
        return $hasil = true;
    }

    public function takeData($data)
    {
        $query = "INSERT INTO ". $this->table ." (nama, email, password) VALUES (:nama, :email, :password)";
        $this->dbh->query($query);
        $this->dbh->bind('nama', $data['nama']);
        $this->dbh->bind('email', $data['email']);
        $this->dbh->bind('password', $data['password']);
        // var_dump($data);
        $this->dbh->execute();

        return $this->dbh->rowCount();
    }
}