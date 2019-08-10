<?php

class Siswa {
    public function __construct()
    {
        $this->dbconnect = new PDO('mysql:host=localhost;dbname=data_siswa', 'root', 'masukaja');
    }
    public function insertSiswa()
    {
        echo "Ingin input berapa data : ";
        $inData = fgets(STDIN);
        for ($i = 0; $i < $inData; $i++) {
            echo "Masukkan Nama : ";
            $nama = fgets(STDIN);
            echo "Masukkan Nilai : ";
            $nilai = fgets(STDIN);
            echo "Masukkan Divisi : ";
            $divisi = fgets(STDIN);
            echo "\n";
        }
        $sql = "INSERT INTO siswa(nama, nilai, divisi) VALUES(?, ?, ?)";
        $statement = $this->dbconnect->prepare($sql);
        $statement->execute([trim($nama), trim($nilai), trim($divisi)]);
    }
    public function countData()
    {
        echo "Jumlah datanya adalah : ";
        $countData = "SELECT COUNT(id) FROM siswa";
        $hitung = $this->dbconnect->prepare($countData);
        $hitung->execute();
        $getData = $hitung->fetchAll(PDO::FETCH_ASSOC);
        $count = sizeof($getData);
        echo $count;
    }
    public function nilaiRata()
    {
        echo "Nilai Rata-Ratanya adalah : ";
        $rataData = "SELECT AVG(nilai) FROM siswa";
        $hitungRata = $this->dbconnect->prepare($rataData);
        $hitungRata->execute();
        $getData = $hitungRata->fetchAll(PDO::FETCH_ASSOC);
        $avg = ($getData);
        echo $avg;
    }
    public function nilaiTinggi()
    {
        echo "Siswa Dengan Nilai Tinggi lebih dari 80 : ".PHP_EOL;
        $nilaiTinggi = "SELECT * FROM siswa WHERE nilai => 80 ORDER BY nilai DESC ";
        $hitungTinggi = $this->dbconnect->prepare($nilaiTinggi);
        $hitungTinggi->execute();
        $getData = $hitungTinggi->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getData as $key => $data) {
            echo "Nama : " . $data['nama'] . PHP_EOL;
            echo "Nilai : " . $data['nilai'] . PHP_EOL;
            echo "Divisi : " . $data['divisi'] . PHP_EOL;
            echo "\n";
        }
    }
    public function nilaiRendah()
    {
        echo "Siswa Dengan Nilai Terendah kurang dari 65 : ".PHP_EOL;
        $nilaiRendah = "SELECT * FROM siswa WHERE nilai <= 65 ORDER BY nilai ASC ";
        $hitungRendah = $this->dbconnect->prepare($nilaiRendah);
        $hitungRendah->execute();
        $getData = $hitungRendah->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getData as $key => $data) {
            echo "Nama : " . $data['nama'] . PHP_EOL;
            echo "Nilai : " . $data['nilai'] . PHP_EOL;
            echo "Divisi : " . $data['divisi'] . PHP_EOL;
            echo "\n";
        }
    }
}
$objectSiswa = new Siswa();

echo "Selamat datang di input data Siswa!" . PHP_EOL . PHP_EOL;
echo "Pilih Menu" . PHP_EOL;
echo "1. Input Data" . PHP_EOL;
echo "2. Hitung Jumlah Data". PHP_EOL;
echo "3. Nilai rata-rata Siswa".PHP_EOL;
echo "4. Nilai Siswa diatas 80" .PHP_EOL;
echo "5. Nilai Siswa dibawah 65".PHP_EOL;
echo "Pilih : ";
$menu = fgets (STDIN);
if (trim($menu) == 1){
    echo $objectSiswa->insertSiswa();
} elseif (trim($menu) == 2){
    echo $objectSiswa->countData();
} elseif (trim($menu) == 3) {
    echo $objectSiswa->nilaiRata();
} elseif (trim($menu) == 4) {
    echo $objectSiswa->nilaiTinggi();
} elseif (trim($menu) == 5) {
    echo $objectSiswa->nilaiRendah();
}














