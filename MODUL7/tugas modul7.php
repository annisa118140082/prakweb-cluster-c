<?php
require("koneksi.php");
if(isset($_POST['tambah'])){
    if(tambah() > 0){
        echo "<script>
            alert('data berhasil ditambah');
            </script>";
    }else{
        echo "<script>
            alert('data gagal ditambah');
            </script>";
    }
}
if(isset($_POST['caridata'])){
    $data = cari();
}

if(isset($_POST['hapusdata'])){
    if(hapus() > 0){
        echo "<script>
            alert('data berhasil dihapus');
            </script>";
    }else{
        echo "<script>
            alert('data tidak ditemukan');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <h2>DATA MAHASISWA PENS</h2>
    ==================================
    <h2>TAMBAH DATA</h2>

    <label for="">
        NRP:
        <input type="text" name="nrp" required autocomplete="off">
    </label>
    <label style="display: block; padding-top: 5px;" for="">
        Nama:
        <input type="text" name="nama" required autocomplete="off">
    </label>
    <label for="">
        Foto:
        <input type="file" name="foto" required>
    </label>
    <label style="display: block; padding-top: 5px;"for="">
        Jurusan:
        <select name="jurusan" id="">
                <option value="1" selected="selected">Telekomunikasi</option>
                <option value="2">Elka</option>
                <option value="3">IT</option>
                <option value="4">Elin</option>
            </select>
    </label>
    <button name="tambah">Tambah</button>
    </form>
    ===================================
    <form action="" method="POST">
    <h2>SEARCH DATA</h2>
    <label for="">
        Nama: 
        <input type="text" name="cari" autocomplete="off" >
    </label>
    <button name="caridata">Cari Data</button>
    </form>
    <?php if(!empty($data)) : ?>
    <table cellpadding="10" cellpadding="0" border="1">
        <tr>
            <th>No</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Jurusan</th>
        </tr>
        <?php $a = 1;
        foreach ($data as $dt) : ?>
            <tr>
                <td><?php echo $a;
                    $a++ ?></td>
                <td><?php echo $dt['nrp']; ?></td>
                <td><?php echo $dt['nama']; ?></td>
                <td><img src="img/<?php echo $dt['foto']; ?>" style="height: 80px; width: 80;" alt=""></style></td>
                <td><?php echo $dt['mhsjurusan']; ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <?php endif ?>
    ===================================
    <form action="" method="POST">
    <h2>HAPUS DATA</h2>
    <label for="">
        NRP: 
        <input type="text" name="nrphapus" autocomplete="off">
    </label>
    <button name="hapusdata" onclick="return confirm ('hapus data?')">Hapus Data</button>
    </form>
</body>
</html>