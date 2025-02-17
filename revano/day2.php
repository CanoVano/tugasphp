1 + 2 = <br>
<?php
$angka1 = 3.7;
$angka2 = 5;
$penjumlahan = $angka1 + $angka2;
$x = $angka1 * $angka2; #kali
$xo = $angka1 / $angka2; #bagi
$xoo = $angka1 - $angka2; #kurang

echo $angka1 . " + " . $angka2 . " = " . $penjumlahan;
echo "<br> $angka1 x $angka2 = $x";
echo "<br> $angka1 : $angka2 = $xo";
echo "<br> $angka1 - $angka2 = $xoo";
echo "<br> $angka1 <sup> $angka2 </sup> = "; //sup perpangkatan di html
echo pow ($angka1,$angka2); //pow itu perpangkatan di php
echo "<br>";
print pow (3,5); //angka1 itu dasar, angka 2 itu eksponen
?>