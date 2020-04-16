<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form

$id = $_GET['id'];

mysqli_query($koneksi,"update f_siswa set
              kondisi='tidak terima' where id='$id' "
            );


// mengalihkan halaman kembali ke index.php
header("location:rpl-op.php");

?>
