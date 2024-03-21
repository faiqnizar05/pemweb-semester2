<?php
require_once "class_lingkaran.php";
echo "NILAI PHI: " . Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(25);
$lingkar3 = new Lingkaran(5);
$lingkar4 = new Lingkaran(1000000);

echo "<br/>Luas Lingkaran I " . $lingkar1->getLuas();
echo "<br>Luas Lingkaran II " . $lingkar2->getLuas();
echo "<br>Luas Lingkaran III " .$lingkar3->getLuas();
echo "<br> Luas Lingkaran IV " .$lingkar4->getLuas();
 

echo "Keliling Lingkaran I ".$lingkar1->getKeliling();
echo "<br>Keliling Lingkaran II ".$lingkar2->getKeliling();

?>



