<?php
// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$no_p = $_GET['no_p'];

// $data = mysqli_query($koneksi,"select * from t_coaxial where node_id='$node_id'");
$pilih = mysqli_query($koneksi,"select * from f_siswa_mesin where no_p='$no_p'");
while($data = mysqli_fetch_array($pilih)){

$pdf_skhun = $data['pdf_skhun'];
$pdf_surat_dokter = $data['pdf_surat_dokter'];
$pdf_kk = $data['pdf_kk'];
$pdf_akta = $data['pdf_akta'];
$pdf_photo = $data['pdf_photo'];
$pdf_swa_kk = $data['pdf_swa_kk'];
$pdf_piagam1 = $data['pdf_piagam1'];
$pdf_piagam2 = $data['pdf_piagam2'];
$pdf_piagam3 = $data['pdf_piagam3'];
}
echo $pdf_kk;
unlink("file/"."$pdf_skhun");
unlink("file/".$pdf_surat_dokter);
unlink("file/".$pdf_kk);
unlink("file/".$pdf_akta);
unlink("file/".$pdf_photo);
unlink("file/".$pdf_swa_kk);
unlink("file/".$pdf_piagam1);
unlink("file/".$pdf_piagam2);
unlink("file/".$pdf_piagam3);


//mysqli_query($koneksi,"delete from f_siswa_mesin where no_p='$no_p' ");


?>
