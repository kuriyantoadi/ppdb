<?php
// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$no_p = $_GET['no_p'];

// menghapus data dari database
mysqli_query($koneksi,"delete from f_siswa where no_p='$no_p' ");

// mengalihkan halaman kembali ke index.php
header("location:rpl-ad.php");

?>
