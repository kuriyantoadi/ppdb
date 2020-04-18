<?php
session_start();
if($_SESSION['status']!="login"){
  header("location:../../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
      <center><h2>Tampilan Operator PPDB SMKN 1 Kragilan</h2></center>
      <center><h3>Kompetensi Keahlian Rekayasa Perangkat Lunak</h3></center>
		</div>
		<div class="col-md-2">
		</div>
  </div>

  <table class="table table-bordered">
    <?php
      include '../../../koneksi.php';
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
  		peminum

       from f_siswa where id='$id'");
      while($d = mysqli_fetch_array($data)) {
        include('tampil.php');
       ?>
      <tr>
        <td colspan="2">
          <center>
            <a type="button" class="btn btn-success btn-md" href="rpl-terima.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Anda yakin <?php echo $d['nama_siswa']; ?>, terima ?')" > Diterima</a>
            <a type="button" class="btn btn-danger btn-md" href="rpl-tolak.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Anda yakin <?php echo $d['nama_siswa']; ?>, tidak terima ?')" >Tidak diterima</a>
            <a type="button" class="btn btn-primary btn-md" href="../../../siswa/rpl/tampil-rpl.php?nik=<?php echo $d['nik']; ?>" >Cetak PDF</a>
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
