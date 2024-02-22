<?php
include "koneksi.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $kd_skema = mysqli_real_escape_string($konek, $_GET['id']);

    $query = "DELETE FROM skema WHERE kd_skema = '$kd_skema'";

    $result = mysqli_query($konek, $query);

if ($result){
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='../data-skema.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal dihapus');
    window.location='../data-skema.php';

</script>";
}
}

?>