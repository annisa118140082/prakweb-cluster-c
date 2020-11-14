<?php 
	$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid" , "kifuat" , "icha" , "sharein" , "shafa");
	echo "Data : <br>";
	$i = 1;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}
	echo "<br>";

	echo "Pengurutan data dari A-Z : <br>";
	sort($data);
	$i = 1;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}
	echo "<br>";

	echo "Pengurutan data dari Z-A : <br>";
	rsort($data);
	$i = 1;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}
 ?>