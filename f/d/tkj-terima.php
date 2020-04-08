<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form

$id = $_GET['id'];

mysqli_query($koneksi,"update f_siswa set
              kondisi='diterima' where id='$id' "
            );


// mengalihkan halaman kembali ke index.php
header("location:tkj-op.php");

?>
