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

// UPDATE `upload` SET `id_file`=[value-1],`nama_file`=[value-2] WHERE 1

mysqli_query($koneksi,"UPDATE f_siswa SET
             no_p='$no_p',
             tgl_pendaftaran='$tgl_pendaftaran',
             kompetensi_keahlian='$kompetensi_keahlian',
             asal_sekolah='$asal_sekolah',
             npsn_sekolah='$npsn_sekolah',
             nisn='$nisn',
             nama_siswa='$nama_siswa',
             jenis_kelamin='$jenis_kelamin',
             tempat_lahir='$tempat_lahir',
             tgl_lahir='$tgl_lahir',
             tahun_lulus='$tahun_lulus',
             nik='$nik',
             no_kk='$no_kk',
             tgl_kk='$tgl_kk',
             kota='$kota',
             kecamatan='$kecamatan',
             kelurahan='$kelurahan',
             kode_pos='$kode_pos',
             alamat='$alamat',
             rt='$rt',
             rw='$rw',
             jarak_kesekolah='$jarak_kesekolah',
             nama_org_tua='$nama_org_tua',
             kip='$kip',
             pekerjaan_org_tua='$pekerjaan_org_tua',
             un_bind='$un_bind',
             un_bing='$un_bing',
             un_mtk='$un_mtk',
             un_ipa='$un_ipa'
             where no_p='$no_p'
             ");




// node_id=<?php echo $d['node_id'];
 header("location:rpl-lihat.php?no_p=$no_p");

?>