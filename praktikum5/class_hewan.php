<?php 

class HewanMamaLia
{
    public $warna;
    public $namahewan;
    public $habitat;
    public $melahirkan;

    function makan()
    {
        return "MamaLia makan";
    }

    function minum()
    {
        return "MamaLia minum";
    }

    function menyusui()
    {
        return "MamaLia menyusui";
    }
}


$mamalia = new HewanMamaLia();
$mamalia->makan();
echo $mamalia->namahewan = "Anjing";
echo "<br>";
echo $mamalia->habitat = "LAUT";
echo "<br>";
echo $mamalia->warna = "ABU ABU";
echo "<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();





?>