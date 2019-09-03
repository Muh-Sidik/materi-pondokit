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

$panjang = 10;
$tinggi = 5;
$objetpersegi = new PersegiPanjang($panjang, $tinggi);
echo "Luas persegi panjangnya adalah : " . PersegiPanjang::luasPersegi() . "cm" . PHP_EOL;