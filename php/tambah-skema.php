<?php
include 'koneksi.php';

$kode = $_POST['kd'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$unit = $_POST['unit'];

$query = "INSERT INTO skema(kd_skema, nama_skema, jenis, jumlah) VALUES('$kode', '$nama', '$jenis', '$unit')";
$result = mysqli_query($konek, $query);

if ($result) {
    echo "<script> 
           alert('Data Berhasil ditambahkan!');
           window.location='../data-skema.php';
   
   </script>";
}else{
    echo "<script> 
           alert('Data Gagal ditambahkan!');
           window.location='../tambah-skema.php';
   
   </script>";
}

?>