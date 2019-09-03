<?php

class Lingkaran
{
    private $lingkaran;
    
    public function rumus1($value)
    {
        $jarijari = $value['jari'];
        $phi = $value['phi'];

        $this->lingkaran = ($jarijari*$jarijari) * $phi;
        return $this->lingkaran;
    }

}
