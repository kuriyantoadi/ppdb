<?php
 // echo $d['kondisi'];
 $tampil_kondisi = $d['kondisi'];
if ($tampil_kondisi == "Siswa Lolos Seleksi") {
    echo "<button type='button' class='btn btn-success btn-sm' disabled><b>Siswa Lolos Seleksi</b></a>";
} elseif ($tampil_kondisi == "Siswa Tidak Lolos Seleksi") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>Tidak Siswa Tidak Lolos Seleksi</b></a>";
} else {
    echo "";
}

//validasi salah
$t_val_skhun = $d['val_skhun'];
if ($t_val_skhun == "Data Tidak Sesuai") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>SKHUN Tidak Sesuai</b></a>";
}

$t_val_surat_dokter = $d['val_surat_dokter'];
if ($t_val_skhun == "Data Tidak Sesuai") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>Surat Dokter Tidak Sesuai</b></a>";
}

$t_val_akta = $d['val_kk'];
if ($t_val_skhun == "Data Tidak Sesuai") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>KK Tidak Sesuai</b></a>";
}

$t_val_skhun = $d['val_akta'];
if ($t_val_skhun == "Data Tidak Sesuai") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>Akta Tidak Sesuai</b></a>";
}

$t_val_skhun = $d['val_photo'];
if ($t_val_skhun == "Data Tidak Sesuai") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>Photo Tidak Sesuai</b></a>";
}

$t_val_skhun = $d['val_swaphoto'];
if ($t_val_skhun == "Data Tidak Sesuai") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>SwaPhoto Tidak Sesuai</b></a>";
}

$t_val_skhun = $d['val_piagam1'];
if ($t_val_skhun == "Data Tidak Sesuai") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>Piagam 1 Tidak Sesuai</b></a>";
}

$t_val_skhun = $d['val_piagam2'];
if ($t_val_skhun == "Data Tidak Sesuai") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>Piagam 2 Tidak Sesuai</b></a>";
}

$t_val_skhun = $d['val_piagam3'];
if ($t_val_skhun == "Data Tidak Sesuai") {
    echo "<button type='button' class='btn btn-danger btn-sm' disabled><b>Piagam 3 Tidak Sesuai</b></a>";
}
