<?php
include '../../koneksi.php';

$no_p = $_POST['no_p'];
$tgl_pendaftaran = $_POST['tgl_pendfataran'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
$asal_sekolah = $_POST['asal_sekolah'];
$npsn_sekolah = $_POST['npsn_sekolah'];
$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$tahun_lulus = $_POST['tahun_lulus'];
$nik = $_POST['nik'];
$no_kk = $_POST['no_kk'];
$tgl_kk = $_POST['tgl_kk'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$kelurahan = $_POST['kelurahan'];
$kode_pos = $_POST['kode_pos'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$jarak_kesekolah = $_POST['jarak_kesekolah'];
$nama_org_tua = $_POST['nama_org_tua'];
$pekerjaan_org_tua = $_POST['pekerjaan_org_tua'];
$kip = $_POST['kip'];
$un_bind = $_POST['un_bind'];
$un_bing = $_POST['un_bing'];
$un_mtk = $_POST['un_mtk'];
$un_ipa = $_POST['un_ipa'];

mysqli_query($koneksi,"update f_siswa set
              '$no_p',
              '$tgl_pendaftaran',
              '$kompetensi_keahlian',
              '$asal_sekolah',
              '$npsn_sekolah',
              '$nisn',
              '$nama_siswa',
              '$jenis_kelamin',
              '$tempat_lahir',
              '$tgl_lahir',
              '$tahun_lulus',
              '$nik',
              '$no_kk',
              '$tgl_kk',
              '$kota',
              '$kecamatan',
              '$kelurahan',
              '$kode_pos',
              '$alamat',
              '$rt',
              '$rw',
              '$jarak_kesekolah',
              '$nama_org_tua',
              '$kip',
              '$pekerjaan_org_tua',
              '$un_bing',
              '$un_mtk',
              '$un_mtk',
              '$un_ipa'
              where no_p='$no_p'"
            );


  mysqli_query($koneksi,"insert into f_siswa values(
                '$no_p',
                '$tgl_pendaftaran',
                '$kompetensi_keahlian',
                '$asal_sekolah',
                '$npsn_sekolah',
                '$nisn',
                '$nama_siswa',
                '$jenis_kelamin',
                '$tempat_lahir',
                '$tgl_lahir',
                '$tahun_lulus',
                '$nik',
                '$no_kk',
                '$tgl_kk',
                '$kota',
                '$kecamatan',
                '$kelurahan',
                '$kode_pos',
                '$alamat',
                '$rt',
                '$rw',
                '$jarak_kesekolah',
                '$nama_org_tua',
                '$kip',
                '$pekerjaan_org_tua',
                '$no_p-$pdf_skhun_up.pdf',
                '$no_p-$pdf_surat_dokter_up.pdf',
                '$no_p-$pdf_kk_up.pdf',
                '$no_p-$pdf_akta_up.pdf',
                '$no_p-$pdf_photo_up.pdf',
                '$no_p-$pdf_swa_kk_up.pdf',
                '$no_p-$pdf_piagam1_up.pdf',
                '$no_p-$pdf_piagam2_up.pdf',
                '$no_p-$pdf_piagam3_up.pdf',
                '$un_bing',
                '$un_mtk',
                '$un_mtk',
                '$un_ipa',NULL)");

// node_id=<?php echo $d['node_id'];
//header("location:tampil-rpl.html?no_p=$no_p");

?>
