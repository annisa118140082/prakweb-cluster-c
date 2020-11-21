<?php
function koneksi() 
{
    return mysqli_connect("localhost","root","","mhs");
}

function gambar()
{
    $namafile = $_FILES['foto']['name'];
    $typefile = $_FILES['foto']['type'];
    $sizefile = $_FILES['foto']['size'];
    $tmpfile = $_FILES['foto']['tmp_name'];

    $ekstensi = ['jpeg','png','jpg'];
    $ekstensifile = explode('.',$namafile); //foto.jpg -> foto|jpg
    $ekstensifile = strtolower(end($ekstensifile)); //JPG -> jpg

    //cek ekstensi file
    if(!in_array($ekstensifile,$ekstensi)){
        echo "<script>
            alert('pilih file gambar');
            </script>";
        return false;
    }

    if($typefile != 'image/jpeg' && $typefile != 'image/png'){
        echo "<script>
        alert('pilih file gambar');
        </script>";
        return false;
    }

    //cek size file
    if($sizefile > 5000000){
        echo "<script>
        alert('gambar terlalu besar');
        </script>";
        return false;
    }

    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensifile;

    move_uploaded_file($tmpfile, 'img/' . $namafilebaru);
    return $namafilebaru;
}

function tambah()
{
    $nrp = htmlspecialchars($_POST['nrp']);
    $nama = htmlspecialchars($_POST['nama']);
    $foto = gambar();
    $jurusan = $_POST['jurusan'];

    if(!$foto){
        return false;
    }
    $db = koneksi();

    $query = "INSERT INTO mahasiswa VALUES ('$nrp', '$nama', '$foto', '$jurusan')";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

function cari()
{
    $db = koneksi();
    $nama = $_POST['cari'];
    $query = "SELECT mahasiswa.nrp as nrp, mahasiswa.nama as nama, mahasiswa.foto as foto, jurusan.nama as mhsjurusan FROM mahasiswa LEFT JOIN jurusan ON mahasiswa.ID_jur = jurusan.ID_Jur WHERE mahasiswa.nama LIKE '%$nama%'";

    $hasil = mysqli_query($db,$query);

    $data= [];
    while($row = mysqli_fetch_assoc($hasil)){
        $data[] = $row;
    }
    return $data;
}

function hapus()
{
    $db = koneksi();
    $nrp = $_POST['nrphapus'];
    $query = "DELETE from mahasiswa WHERE nrp = $nrp";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}
?>