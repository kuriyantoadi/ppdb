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
		<div class="col-md-3">
			<center><img class="img-fluid" alt="Bootstrap Image Preview" src="../../images/logo-smkn1.png" />
		</div>
		<div class="col-md-6">
      <center><h3>Form Pendaftaran Calon Peserta Didik</h3></center>
      <center><h3>SMK Negeri 1 Kragilan</h3></center>
      <center><h3>Program Studi Rekayasa Perangkat Lunak</h3></center><br>
		</div>
		<div class="col-md-3">
		</div>
  </div>

  <table class="table table-bordered">
    <?php
      include '../../koneksi.php';
      $no_p = $_GET['no_p'];
      $data = mysqli_query($koneksi,"select * from f_siswa where no_p='$no_p'");
      while($d = mysqli_fetch_array($data)) {
    ?>

    <table class="table table-bordered">
      <tr>
        <td colspan="2"><center><h4>Bukti Pendaftaran Calon Peserta Didik Baru</td>
      </tr>
      <tr>
        <td colspan="2"><center><h4>SMK Negeri 1 Kragilan</td>
      </tr>
      <tr>
        <td>Nomor Pendaftaran</td>
        <td><?php echo $d['no_p']; ?></td>
      </tr>
      <tr>
        <td>Tanggal Pendaftaran</td>
        <td><?php echo $d['tgl_pendaftaran']; ?></td>
      </tr>
      <tr>
        <td>Kompetensi Keahlian</td>
        <td><?php echo $d['kompetensi_keahlian']; ?></td>
      </tr>
      <tr>
        <td>Nama Asal Sekolah</td>
        <td><?php echo $d['asal_sekolah']; ?></td>
      </tr>
      <tr>
        <td>NPSN Sekolah Asal</td>
        <td><?php echo $d['npsn_sekolah']; ?></td>
      </tr>
      <tr>
        <td>NISN</td>
        <td><?php echo $d['nisn']; ?></td>
      </tr>
      <tr>
        <td>Nama Calon Peserta Didik</td>
        <td><?php echo $d['nama_siswa']; ?></td>
      </tr>
      <tr>
        <td>jenis Kelamin</td>
        <td><?php echo $d['jenis_kelamin']; ?></td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td><?php echo $d['tempat_lahir']; ?></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><?php echo $d['tgl_lahir']; ?></td>
      </tr>
      <tr>
        <td>Tahun Lulus</td>
        <td><?php echo $d['tahun_lulus']; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td><?php echo $d['nik']; ?></td>
      </tr>
      <tr>
        <td>Nomor Kartu Keluarga</td>
        <td><?php echo $d['no_kk']; ?></td>
      </tr>
      <tr>
        <td>Tanggal Terbit KK</td>
        <td><?php echo $d['tgl_kk']; ?></td>
      </tr>
      <tr>
        <td>Kota/Kabupaten</td>
        <td><?php echo $d['kota']; ?></td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td><?php echo $d['kecamatan']; ?></td>
      </tr>
      <tr>
        <td>Kelurahan</td>
        <td><?php echo $d['kelurahan']; ?></td>
      </tr>
      <tr>
        <td>Kode POS</td>
        <td><?php echo $d['kode_pos']; ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $d['alamat']; ?></td>
      </tr>
      <tr>
        <td>RT</td>
        <td><?php echo $d['rt']; ?></td>
      </tr>
      <tr>
        <td>RW</td>
        <td><?php echo $d['rw']; ?></td>
      </tr>
      <tr>
        <td>Jarak rumah ke sekolah</td>
        <td><?php echo $d['jarak_kesekolah']; ?></td>
      </tr>
      <tr>
        <td>Nama Orang Tua/Wali</td>
        <td><?php echo $d['nama_org_tua']; ?></td>
      </tr>
      <tr>
        <td>Pekerjaan Orang Tua</td>
        <td><?php echo $d['pekerjaan_org_tua']; ?></td>
      </tr>
      <tr>
        <td>PKH/KKS/KIP/Jamsosda</td>
        <td><?php echo $d['kip']; ?></td>
      </tr>
      <tr>
        <td>SKHUN</td>
        <td><a href="#"></a></td>
      </tr>
      <tr>
        <td>Surat Sehat dari Dokter</td>
        <td><a href="#"></a></td>
      </tr>
      <tr>
        <td>Kartu Keluarga</td>
        <td><a href="#"></a></td>
      </tr>
      <tr>
        <td>Akta Kelahiran</td>
        <td><a href="#"></a></td>
      </tr>
      <tr>
        <td>Photo</td>
        <td><a href="#"></a></td>
      </tr>
      <tr>
        <td>SwaPhoto</td>
        <td><a href="#"></a></td>
      </tr>
      <tr>
        <td>Piagam 1</td>
        <td><a href="#"></a></td>
      </tr>
      <tr>
        <td>Piagam 2</td>
        <td><a href="#"></a></td>
      </tr>
      <tr>
        <td>Piagam 3</td>
        <td><a href="#"></a></td>
      </tr>
      <tr>
        <td>Nilai UN Bahasa Indonesia</td>
        <td><?php echo $d['un_bind']; ?></td>
      </tr>
      <tr>
        <td>Nilai UN Bahasa Inggris</td>
        <td><?php echo $d['un_bing']; ?></td>
      </tr>
      <tr>
        <td>Nilai UN Matematika</td>
        <td><?php echo $d['un_mtk']; ?></td>
      </tr>
      <tr>
        <td>Nilai UN IPA</td>
        <td><?php echo $d['un_ipa']; ?></td>
      </tr>
    </table>

    <a type="button" class="btn btn-danger btn-sm" href="hapus-rpl.php?no_p=<?php echo $d['no_p']; ?>" onclick="return confirm('Anda yakin menghapus data ini ?')" >Hapus</a>
  <?php } ?>

      </div>
    </div>
</div>
</div>




  </body>
</html>
