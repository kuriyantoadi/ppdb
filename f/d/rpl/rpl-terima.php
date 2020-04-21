<?php
// koneksi database
include '../../../koneksi.php';

// menangkap data yang di kirim dari form

session_start();
if($_SESSION['status']!="login"){
  header("location:../../index.php?pesan=belum_login");
}else{
  // $id = mysql_real_escape_string($_GET['id']);
  $id = $_GET['id'];


  mysqli_query($koneksi,"update f_siswa_rpl set
                kondisi='diterima' where id='$id' "
              );


  // mengalihkan halaman kembali ke index.php
  header("location:rpl-op.php");
}
?>
