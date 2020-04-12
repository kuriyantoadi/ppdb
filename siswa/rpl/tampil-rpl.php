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
      <center><h3>SMK Negeri 1 Kragilan</h3></center>
		</div>
		<div class="col-md-3">
		</div>
  </div>

  <table class="table table-bordered">
    <?php
    session_start();
    if($_SESSION['status']!="login"){
      header("location:f-rpl.php");
    }
    ?>
    <?php
      include '../../koneksi.php';
      $no_p = $_GET['no_p'];
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

       from f_siswa where no_p='$no_p'");
      while($d = mysqli_fetch_array($data)) {
    ?>

    <table class="table table-bordered">
      <tr>
        <td colspan="2"><center><h4>Bukti Pendaftaran Calon Peserta Didik Baru</td>
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
      <tr>
        <td>Username tes</td>
        <td><?php echo $d['username']; ?></td>
      </tr>
      <tr>
        <td>Password tes</td>
        <td><?php echo $d['password']; ?></td>
      </tr>
      <tr>
        <td>Enkripsi </td>
        <td><?php echo $d['enk']; ?></td>
      </tr>
      <tr>
        <td colspan="2">
          <p>
            <b>Informasi :</b>
            <ol>
              <li>Bukti pendaftaran agar dicetak, minimal 1 lembar.</li>
              <li>Bukti pendaftaran hanya muncul 1 kali ketika daftar.</li>
              <li>Bukti pendaftaran tidak boleh disebar luaskan untuk kepentingan apapun.</li>
              <li>Setiap calon peserta didik baru bertanggung jawab atas bukti pendaftaran.</li>
              <li>Username dan Password Tes hanya dapat dipakai di Web smkn1kragilan.sch.id.</li>
              <li>Username dan Password Tes hanya dapat digunakan 1 kali.</li>
              <li>Peserta yang dinyatakan tidak lolos perberkasan maka tidak bisa mengikuti tes.</li>
              <li>Jika ada peserta yang sudah dinyatakan lolos dan tidak bisa masuk ke login web tes boleh dinformasikan ke panitia.</li>
              <li>Tes dilaksanakan secara online tempat tinggal masing-masing calon peserta didik.</li>
              <li>Jika calon peserta didik melakukan kecurangan ketika mengerjakan soal tes, maka akan dinyatakan gugur dari pendaftaran.</li>
              <li>Jika ada kesalahan data pada bukti pendaftaran, calon peserta didik harus menginformasikan kepada panitia.</li>
            </ol>
          </p>
        </td>
      </tr>
    </table>
    <center>
    <a target="_blank" type="button" class="btn btn-info btn-md" href="cetak-rpl.php?no_p=<?php echo $no_p; ?>" >Cetak PDF</a>
  <?php } ?>
<br><br><br>

      </div>
    </div>
</div>
</div>




  </body>
</html>
