<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "sertifikasi";

$konek = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
	# code...
	echo "gagal koneksi!".mysqli_connect_errno();
}
?>