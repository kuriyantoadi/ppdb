<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form

$nomor_pendaftaran = $_GET['nomor_pendaftaran'];

mysqli_query($koneksi,"update f_siswa set
              kondisi='diterima' where nomor_pendaftaran='$nomor_pendaftaran' "
            );


// mengalihkan halaman kembali ke index.php
header("location:tkr-op.php");

?>
