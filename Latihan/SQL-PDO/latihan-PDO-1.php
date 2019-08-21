<?php

echo "Selamat datang di Pendaftaran Siswa!";

echo "Masukkan nama : ";
$nama = fgets(STDIN);
echo "Masukkan nik : ";
$nik = fgets(STDIN);
echo "Masukkan umur : ";
$age = fgets(STDIN);
echo "Masukkan Nilai sekolah sebelumnya : ";
$nilai = fgets(STDIN);
echo "Masukkan alamat : ";
$alamat = fgets(STDIN);

$input = "INSERT INTO murid(nama, nik, umur, alamat, nilai) VALUES(?, ?, ?, ?, ?)";
$ratarata = "SELECT AVG(age) FROM murid";
$limittop = "SELECT TOP 5 FROM murid ORDER BY nilai";
$tampilkan = "SELECT * FROM murid";
$dbConnect = new PDO('mysql:host=localhost;dbname=input', 'root', 'masukaja');
$statement = $dbConnect->prepare($input);
$statement->execute([trim($nama), trim($nik), trim($age), trim($nilai), trim($alamat), trim($nilai)]);

echo "Ingin melihat data yang dinput? Y/N ";
$tanya = fgets(STDIN);
if (trim($tanya) === "Y" || trim($tanya) === "y") {
    
}