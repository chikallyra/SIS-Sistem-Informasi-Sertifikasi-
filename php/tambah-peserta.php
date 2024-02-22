<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no = $_POST['nohp'];
$kode = $_POST['kd_skema'];

$query = "INSERT INTO peserta(nama, jk, alamat, nomor, kd_skema) VALUES('$nama', '$jk', '$alamat', '$no', '$kode')";
$result = mysqli_query($konek, $query);

if ($result) {
    echo "<script> 
           alert('Data Berhasil ditambahkan!');
           window.location='../index.php';
   
   </script>";
}else{
    echo "<script> 
           alert('Data Gagal ditambahkan!');
           window.location='../tambah-peserta.php';
   
   </script>";
}

?>