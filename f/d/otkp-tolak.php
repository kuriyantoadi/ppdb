<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form

$nomor_pendaftaran = $_GET['nomor_pendaftaran'];

mysqli_query($koneksi,"update f_siswa set
              kondisi='tidak terima' where nomor_pendaftaran='$nomor_pendaftaran' "
            );


// mengalihkan halaman kembali ke index.php
header("location:tkj-tampil.php");

?>
