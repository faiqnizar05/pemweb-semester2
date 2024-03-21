<?php

class Mahasiswa 
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)

    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }



    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "CumLaude";
        } else {
            echo "you did a great job";
        }
    }
}

$mahasiswa = new Mahasiswa("Muhammad Nizar Al-Faiq","0110223298","Depok","Teknik Informatika","4.0");
echo "Nama Lengkap : " .$mahasiswa->namaMahasiswa;
echo "<br/>";
echo "Nim : " .$mahasiswa->nim;
echo "<br/>";
echo "domisili : " .$mahasiswa->domisili;
echo "<br/>";
echo "prodi : " .$mahasiswa->prodi;
echo "<br/>";
echo "ipk : " .$mahasiswa->ipk;
echo "<br/>";
$mahasiswa->setPredikatIPK($mahasiswa->ipk);





?>