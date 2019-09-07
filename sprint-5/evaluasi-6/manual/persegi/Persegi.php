<?php

class Persegi {

    private $persegi;
    
    public function rumus3($value)
    {
        $panjang = $value['sisi1'];
        $lebar = $value['sisi2'];

        $this->persegi = $panjang * $lebar;
        return $this->persegi;
    }

}
