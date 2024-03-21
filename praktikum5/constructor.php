<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatoperasi;

    function __construct($nama, $warna, $tempatoperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatoperasi = $tempatoperasi;
    }
}

$kendaraan = new Kendaraan("Toyota", "Hitam Putih", "Darat");
echo $kendaraan->nama;
echo "</br>";
echo $kendaraan->warna;
echo "</br>";
echo $kendaraan->tempatoperasi;
?>