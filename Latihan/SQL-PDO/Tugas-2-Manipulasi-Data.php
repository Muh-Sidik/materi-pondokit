<?php

//Soal no 3
$dataConnect = new PDO('mysql:host=localhost;dbname=pondokit', 'root', 'masukaja');
$statement = $dataConnect->prepare("SELECT * FROM santri WHERE id = 13");
$statement->execute();

$hasil = $statement->fetchAll(PDO::FETCH_ASSOC);
print_r($hasil);

//soal no 4
$update = $dataConnect->prepare("UPDATE santri
SET nama = 'Ahsan S', age = '23', divisi = 'Programmer'
WHERE id = 17");
$update->execute();

//soal no 5
$delete = $dataConnect->prepare("DELETE FROM santri WHERE id = 19");
$delete->execute();

$insert = $dataConnect->prepare("INSERT INTO santri(nama, age, divisi) 
VALUES('Arif', '21', 'Back End'),
('Imam', '20', 'Back End'),
('Riffadi', '19', 'Mobile Java'),
('Rahmad', '24', 'API'),
('Rahmadi', '18', 'API')");
$insert->execute();

$tampil = $dataConnect->prepare("SELECT * FROM santri");
$tampil->execute();

$hasil2 = $tampil->fetchAll(PDO::FETCH_ASSOC);
print_r($hasil2);