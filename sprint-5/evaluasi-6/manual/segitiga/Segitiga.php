<?php

class Segitiga {

    public $segitiga;

    public function rumus2($value)
    {
        $alas = $value['alas'];
        $tinggi = $value['tinggi'];

        $this->segitiga = $alas * $tinggi / 2;
        return $this->segitiga;
    }

}