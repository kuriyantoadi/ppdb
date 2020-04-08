<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form

$no_p = $_GET['no_p'];

mysqli_query($koneksi,"update f_siswa set
              kondisi='diterima' where no_p='$no_p' "
            );


// mengalihkan halaman kembali ke index.php
header("location:tkr-op.php");

?>
