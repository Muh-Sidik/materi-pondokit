<?php

class PersegiPanjang
{
    static $panjang;
    static $tinggi;

    public function __construct ($panjang, $tinggi)
    {
        self::$panjang = $panjang;
        self::$tinggi = $tinggi;
    }

    public static function luasPersegi()
    {
        return self::$panjang * self::$tinggi;
    }
}

echo "Masukkan angka : ";
$panjang =(int) fgets(STDIN);
echo "Masukka angka lagi : ";
$tinggi =(int) fgets(STDIN);
// $objetpersegi = new PersegiPanjang($panjang, $tinggi);
// echo "Luas persegi panjangnya adalah : " . PersegiPanjang::luasPersegi() . "cm" . PHP_EOL;

try {
    if ($panjang < 0 || $tinggi < 0) {
        throw new ErrorDataNotValid("Angka tidak boleh kurang dari 0!!!"); 
    } else {
        $objetpersegi = new PersegiPanjang($panjang, $tinggi);
        echo "data benar ! hasillnya : " . PersegiPanjang::luasPersegi() . "cm" . PHP_EOL;
    }
} catch (ErrorDataNotValid $error) {
    echo $error->getMessage();
}
class ErrorDataNotValid extends Exception{}