<?php
// koneksi database
include '../../../koneksi.php';


session_start();
if ($_SESSION['status']!="tkr") {
    header("location:../../index.php?pesan=belum_login");
} else {
    $id = $_POST['id'];
    $val_skhun = $_POST['val_skhun'];
    $val_surat_dokter = $_POST['val_surat_dokter'];
    $val_kk = $_POST['val_kk'];
    $val_akta = $_POST['val_akta'];
    $val_photo = $_POST['val_photo'];
    $val_swaphoto = $_POST['val_swaphoto'];
    $val_piagam1 = $_POST['val_piagam1'];
    $val_piagam2 = $_POST['val_piagam2'];
    $val_piagam3 = $_POST['val_piagam3'];
    $kondisi = $_POST['kondisi'];


    // UPDATE `upload` SET `id_file`=[value-1],`nama_file`=[value-2] WHERE 1

    mysqli_query($koneksi, "UPDATE f_siswa_tkr SET
               id='$id',
               val_skhun='$val_skhun',
               val_surat_dokter='$val_surat_dokter',
               val_kk='$val_kk',
               val_akta='$val_akta',
               val_photo='$val_photo',
               val_swaphoto='$val_swaphoto',
               val_piagam1='$val_piagam1',
               val_piagam2='$val_piagam2',
               val_piagam3='$val_piagam3',
               kondisi='$kondisi'

               where id='$id'
               ");
    // echo $val_piagam3;


    header("location:index.php");
}
