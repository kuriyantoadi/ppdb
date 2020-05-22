<?php
session_start();
if ($_SESSION['status']!="otkp") {
    header("location:../../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Operator  PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">

  <script src="../../../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
      <center><h2>Tampilan Operator PPDB SMKN 1 Kragilan</h2></center>
      <center><h3>Kompetensi Keahlian Otomatisasi Tata Kelolah Perkantoran</h3></center>
		</div>
		<div class="col-md-2">
		</div>
  </div>

  <table class="table table-bordered">
    <?php
      include '../../../koneksi.php';
      $id = $_GET['id'];
      $data = mysqli_query($koneksi, "select
      id,
  		no_p,
  		tgl_pendaftaran,
  		kompetensi_keahlian,
  		asal_sekolah,
  		npsn_sekolah,
  		nisn,
  		nama_siswa,
  		jenis_kelamin,
  		tgl_lahir,
  		tempat_lahir,
  		tahun_lulus,
  		no_hp,
  		nik,
  		no_kk,
  		tgl_kk,
  		kota,
  		kecamatan,
  		kelurahan,
  		kode_pos,
  		alamat,
  		rt,
  		rw,
  		jarak_kesekolah,
  		nama_org_tua,
  		pekerjaan_org_tua,
  		kip,
  		pdf_skhun,
  		pdf_surat_dokter,
  		pdf_kk,
  		pdf_akta,
  		pdf_photo,
  		pdf_swa_kk,
  		pdf_piagam1,
  		pdf_piagam2,
  		pdf_piagam3,
  		un_bind,
  		un_bing,
  		un_mtk,
  		un_ipa,
  		id,
  		kondisi,
  		username,
  		password,
  		enk,
  		bertindik,
  		perokok,
  		psikotropika,
  		bertato,
  		peminum,
      val_skhun,
      val_surat_dokter,
      val_kk,
      val_akta,
      val_photo,
      val_swaphoto,
      val_piagam1,
      val_piagam2,
      val_piagam3,
      buta_warna,
      kompetensi_keahlian_2

       from f_siswa_otkp where id='$id'");
      while ($d = mysqli_fetch_array($data)) {
          include('tampil.php'); ?>

    <br>
    <?php
      } ?>

      </div>
    </div>
</div>
</div>




  </body>
</html>
