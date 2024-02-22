<?php
include 'koneksi.php';

$kode = $_POST['kd'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$unit = $_POST['unit'];

$query = "UPDATE skema SET kd_skema = '$kode', nama_skema = '$nama', jenis = '$jenis', jumlah = '$unit' WHERE kd_skema = '$kode'";
$result = mysqli_query($konek, $query);

if ($result) {
    echo "<script> 
           alert('Data Berhasil diubah!');
           window.location='../data-skema.php';
   
   </script>";
}else{
    echo "<script> 
           alert('Data Gagal diubah!');
           window.location='../tambah-skema.php';
   
   </script>";
}

?>