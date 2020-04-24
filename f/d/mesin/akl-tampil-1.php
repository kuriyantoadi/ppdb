<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">
  
  <script src="../../../js/bootstrap.min.js"></script>
</head>
<body>

  <?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  ?>

<div class="container">

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<center><img class="img-fluid" alt="Bootstrap Image Preview" src="../../images/logo-smkn1.png" />
		</div>
		<div class="col-md-6">
      <center><h3>Tampil Data Pendaftaran Calon Peserta Didik</h3></center>
      <center><h3>SMK Negeri 1 Kragilan</h3></center>
      <center><h3>Kompetensi Keahlian Rekayasa Perangkat Lunak</h3></center>
		</div>
		<div class="col-md-3">
		</div>
  </div>

  <table class="table table-bordered">
    <?php
      include '../../koneksi.php';
      $id = $_GET['id'];
      $data = mysqli_query($koneksi,"select
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
      id

       from f_siswa where id='$id'");
      while($d = mysqli_fetch_array($data)) {
        include('tampil.php');
       ?>
      <tr>
        <td colspan="2">
          <center>
            <a type="button" class="btn btn-primary btn-md" href="rpl-terima.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Anda yakin <?php echo $d['nama_siswa']; ?>, terima ?')" > Diterima</a>
            <a type="button" class="btn btn-danger btn-md" href="rpl-tolak.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Anda yakin <?php echo $d['nama_siswa']; ?>, tidak terima ?')" >Tidak diterima</a>
            <a type="button" class="btn btn-success btn-md" href="../../siswa/rpl/tampil-rpl.php?no_p=<?php echo $d['no_p']; ?>" >Cetak PDF</a>
        </td>
      </tr>
    </table><br>
    <?php } ?>

      </div>
    </div>
</div>
</div>




  </body>
</html>
