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
        $countData = "SELECT COUNT(id) FROM siswa;";

        $statement = $this->dbconnect->prepare($countData);
        $statement->execute();

        $getData = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($getData as $key => $value) {
            echo "Jumlah datanya adalah : ". $value['COUNT(id)'] . PHP_EOL . "\n";
        }
        
    }
    public function nilaiRata()
    {
        $rataData = "SELECT AVG(nilai) FROM siswa";

        $statement = $this->dbconnect->prepare($rataData);
        $statement->execute();

        $getData = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($getData as $key => $data) {
        echo "Nilai Rata-Ratanya adalah : ". $data['AVG(nilai)'] . PHP_EOL . "\n";
        }
    }
    public function nilaiTinggi()
    {
        echo "Siswa Dengan Nilai Tinggi lebih dari 80 : ".PHP_EOL;

        $nilaiTinggi = "SELECT * FROM siswa WHERE nilai >= 80 ORDER BY nilai DESC ";

        $statement = $this->dbconnect->prepare($nilaiTinggi);
        $statement->execute();

        $getData = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($getData as $key => $data) {
            echo "Nama : " . $data['nama'] . PHP_EOL;
            echo "Nilai : " . $data['nilai'] . PHP_EOL;
            echo "Divisi : " . $data['divisi'] . PHP_EOL . "\n";
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
            echo "Divisi : " . $data['divisi'] . PHP_EOL . "\n";
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
} else {
    echo "error input";
}













