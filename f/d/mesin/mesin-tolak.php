<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if($_SESSION['status']!="login"){
  header("location:../../index.php?pesan=belum_login");
}else{
  // $id = mysql_real_escape_string($_GET['id']);
  $id = $_GET['id'];

  mysqli_query($koneksi,"update f_siswa_mesin set
                kondisi='tidak diterima' where id='$id' "
              );


  // mengalihkan halaman kembali ke index.php
  header("location:mesin-op.php");
}



?>