<?php
$input = 20;
$input2 = 5;
$operator;

echo "bilangan 1 = ".$input."<br>";
echo "bilangan 2 = ".$input2."<br>";
echo "<br>";
echo "Berikut merupakan hasi dari setiap operasi <br>";
echo "<br>";
echo "PENJUMLAHAN <br>";
$operator= $input + $input2;
echo "Operator : + <br>";
echo "Hasil : ".$operator."<br>";
echo "<br>";

echo "PENGURANGAN <br>";
$operator= $input - $input2;
echo "Operator : - <br>";
echo "Hasil : ".$operator."<br>";
echo "<br>";

echo "PERKALIAN <br>";
$operator= $input * $input2;
echo "Operator : * <br>";
echo "Hasil : ".$operator."<br>";
echo "<br>";

echo "PEMBAGIAN <br>";
$operator= $input / $input2;
echo "Operator : / <br>";
echo "Hasil : ".$operator."<br>";
echo "<br>";

echo "MODULUS <br>";
$operator= $input % $input2;
echo "Operator : % <br>";
echo "Hasil : ".$operator;
echo "<br>";

?>