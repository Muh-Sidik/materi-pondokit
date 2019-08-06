<?php
class Buku 
{
public $stock =[
        [   'namabuku' => "Mereka bukan lagi manusia",
            'isbn' => "8374-1883"
        ],
        [
            'namabuku' => "Tak lagi sama",
            'isbn' => "7753-8776"
        ],
        [
            'namabuku' => "Serampah yang berarti cinta",
            'isbn' => "6638-8239"
        ]
    ];


    public function judulbuku()
    {
    foreach ($this->stock as $key => $val) 
        { 
            print_r ("$key. " .$val['namabuku']) . PHP_EOL;
        }
    }

    public function dipilih($buku)
    {
        foreach ($this->stock[$buku] as $key) {
            return($this->stock[$buku]);
    }
    }

    public function meminjam($buku)
    {
        unset($this->stock[$buku] , $this->stock[$buku]);
        return $this->stock = array_values($this->stock);
    }

    public function pengembalian($dafbuku)
    {
        array_push($this->stock, $dafbuku);
        return $this->stock;
    }

}

$objectPerpus = new Buku ();
echo "Daftar Buku Perpustakaan : " . PHP_EOL;
print_r ($objectPerpus->judulbuku());

echo "=> Pilih Nomor : " . PHP_EOL;
$buku = (int)fgets(STDIN);

echo"=> Buku yang dipilih : " . PHP_EOL;
print_r ($objectPerpus->dipilih($buku));
$dafbuku = $objectPerpus->dipilih($buku);
echo"\n";

echo "=> Sisa Buku : " . PHP_EOL;
print_r ($objectPerpus->meminjam($buku));

echo "Ingin kembalikan buku? Y/N" . PHP_EOL;
$kembalibuku =  fgets(STDIN);
if ($kembalibuku = "y") {
    print_r($objectPerpus->pengembalian($dafbuku));
} else {
    print_r($objectPerpus->meminjam($buku));
};



// echo "=> Buku yang dikembalikan : " . PHP_EOL;
// $kembalibuku = (int) fgets(STDIN);

