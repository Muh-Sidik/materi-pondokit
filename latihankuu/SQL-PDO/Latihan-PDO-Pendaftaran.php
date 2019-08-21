<?php

$dbConnect = new PDO('mysql:host=localhost;dbname=daftar', 'root', 'masukaja');
$input = "INSERT INTO regis(nama, nik, alamat, no_telpon) VALUES(?, ?, ?, ?)";
$outputNIK = "SELECT * FROM regis WHERE nik = ?";
echo "Selamat datang di Pendaftaran Pondok IT" . PHP_EOL.PHP_EOL;

echo "Pilih Menu :".PHP_EOL;
echo "1. Registrasi".PHP_EOL;
echo "2. Check data".PHP_EOL;
echo "Menu apa yang di pilih? ";
$pilih = fgets(STDIN);

if (trim($pilih) == 1) {
    echo "Selamat datang di menu Registrasi".PHP_EOL.PHP_EOL;
    echo "Masukkan Nama : ";
    $nama = fgets(STDIN);
    echo "Masukkan NIK : ";
    $nik = fgets(STDIN);
    echo "Masukkan Alamat : ";
    $alamat = fgets(STDIN);
    echo "Masukkan No. Telfon : ";
    $noHp = fgets(STDIN);

    $statement = $dbConnect->prepare($input);
    $statement->execute([trim($nama), trim($nik), trim($alamat), trim($noHp)]);
} elseif (trim($pilih) == 2) {
    echo "Cek data anda : ".PHP_EOL;
    echo "Masukkan NIK data : ";
    $checkNIK = fgets(STDIN);
    $check = $dbConnect->prepare($outputNIK);
    $check->execute([trim($checkNIK)]);
    
    $getData = $check->fetchAll(PDO::FETCH_ASSOC);
    foreach ($getData as $key => $data) {
        echo "Data : " . $data['id'] . PHP_EOL;
        echo "Nama : " . $data['nama'] . PHP_EOL;
        echo "Alamat : " . $data['alamat'] . PHP_EOL;
        echo "No. Telfon : " . $data['no_telpon'] . PHP_EOL;
        echo "Selamat, Data Anda Telah Terverifikasi!";
    }
} else {
    echo "Mohon masukkan data yang benar!";
}