<?php

    echo "Selamat Datang di Input data siswa" . PHP_EOL;
    
    echo "Masukkan Nama : ";
    $nama = fgets(STDIN);
    echo "Masukkan NIK : ";
    $nik = fgets(STDIN);
    echo "Masukkan Alamat : ";
    $alamat = fgets(STDIN);

    $sql = "INSERT INTO student(nama, nik, alamat) VALUES (?, ?, ?)";
    $ReadData = "SELECT * FROM student";
    $dbconnect = new PDO('mysql:host=localhost;dbname=crud1', 'root', 'masukaja');
    $state = $dbconnect->prepare($sql);
    $state->execute([trim($nama), trim($nik), trim($alamat)]);

    echo "ingin tampilkan data? Y/N : ";
    $tanya = fgets(STDIN);
    if (trim($tanya) === 'Y' || trim($tanya) === 'y') {
        $stateRead = $dbconnect->prepare($ReadData);
        $stateRead->execute();
        $getData = $stateRead->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getData as $key => $data) {
            echo "DATA : " . $data['id'] . PHP_EOL;
            echo "nama : " . $data['nama'] . PHP_EOL;
            echo "nik : " . $data['nik'] . PHP_EOL;
            echo "alamat : " . $data['alamat'] . PHP_EOL . "\n";
        }
    } else {
        echo "Terima Kasih telah menggunakan program ini!";
    }
    