<?php
function faktorial($x){
	$angka = 1;
	$hasil = 1;
	 while($angka <= $x){
		 $hasil = $hasil * $angka;
		 $angka = $angka + 1;
	 }
	  echo $hasil;
}
$coba = 4;
faktorial($coba);
?>