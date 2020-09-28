<?php
spl_autoload_register(function ($class_name){
  include ''.$class_name.'.php';

});

$Elang =new Elang(2,'terbang tinggi',10,5);
echo "Elang";
echo "<br>";
echo "Jumlah Kaki :".$Elang->getJumlahKaki();
echo "<br>";
echo "Keahlian :".$Elang->getKeahlian();
echo "<br>";
echo "Attack Power:".$Elang->getAttackPower();
echo "<br>";
echo "Defence Power:".$Elang->getDefencePower();
echo "<br>";
$Elang->setNama('Elang');
echo "".$Elang->atraksi();


echo "<br>";
echo "---------------------------------";
echo "<br>";
$Harimau=new Harimau(7,'lari cepat',7,8);
echo "<br>";
echo "Harimau";
echo "<br>";
echo "Jumlah Kaki :".$Harimau->getJumlahKaki();
echo "<br>";
echo "Keahlian :".$Harimau->getKeahlian();
echo "<br>";
echo "Attack Power:".$Harimau->getAttackPower();
echo "<br>";
echo "Defence Power:".$Harimau->getDefencePower();
echo "<br>";
$Harimau->setNama('Harimau');
echo "".$Harimau->atraksi();

echo "<br>";
echo "---------------------------------";
echo "<br>";
echo "<br>";
echo "".$Elang->serang($Harimau,$Elang);
echo "<br>";
echo "".$Harimau->serang($Harimau,$Elang);



echo "<br>";
echo "---------------------------------";
echo "<br>";
echo "<br>";
echo "".$Elang->getInfoHewan($Elang);



echo "<br>";
echo "---------------------------------";
echo "<br>";
echo "<br>";
echo "".$Harimau->getInfoHewan($Harimau);



?>