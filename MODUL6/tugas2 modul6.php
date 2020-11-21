<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">
            Nama:
            <input type="text" name="nama">
        </label>
        <label style="display: block; padding-top: 2px;"for="">
            Warna: 
            <select name="warna" id="">
                <option value="red" selected="selected">Pilih Warna</option>
                <option value="balck">Hitam</option>
                <option value="yellow">Kuning</option>
                <option value="green">Hijau</option>
            </select>
        </label>
        <button name="hitung">Hitung</button>
    </form>
    <?php
    $nama = "";
    $warna = "red";
    $harga = 0;
    if(isset($_POST['hitung'])){
        $nama = $_POST['nama'];
        $warna = $_POST['warna'];
        hitung($nama,$warna);
    }
    function hitung($nama,$warna){
        $panjang_nama = strlen($nama);
        if($panjang_nama <= 10){
            $harga=$panjang_nama*300;
        }else if($panjang_nama > 10 && $panjang_nama <= 20){
            $harga=$panjang_nama*500;
        }else{
            $harga=$panjang_nama*700;
        }
    }
    ?>
    <p style="color:<?php echo $warna ?>";><?php echo $nama?></p>
    <p>Harga : <?php echo $harga ?></p>
</body>
</html> 