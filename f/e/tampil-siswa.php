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
		</div>
		<div class="col-md-6">
      <center><h3>Form Pendaftaran Calon Peserta Didik</h3></center>
      <center><h3>Tampilan Edit Admin</h3></center>
      <br><br><br>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</div>
  <form class="form-horizontal" action="tambah-rpl.php" name="input" method="POST"  enctype="multipart/form-data" onSubmit="return validasi()">

    <?php
      include '../../koneksi.php';
      $no_p = $_GET['no_p'];
      $data = mysqli_query($koneksi,"select * from f_siswa where no_p='$no_p'");
      while($d = mysqli_fetch_array($data)) {
    ?>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Pendaftaran :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="no_p" value="<?php echo $d['no_p']; ?>" id="no_p" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggal Pendaftaran :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="tgl_pendfataran" value="<?php echo date('d-m-Y'); ?>" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kompetensi Keahlian :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="kompetensi_keahlian" value="Rekayasa Perangkat Lunak">
      </div>
    </div>

    <br><h4>A. DATA ASAL SEKOLAH CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Asal Sekolah :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Nama Asal Sekolah" name="asal_sekolah" id="asal_sekolah" value="<?php echo $d['asal_sekolah']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NPSN Sekolah Asal :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="NPSN Sekolah Asal" name="npsn_sekolah" value="<?php echo $d['npsn_sekolah']; ?>">
      </div>
    </div>

    <br><h4>B. IDENTITAS CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NISN :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="NISN" name="nisn" value="<?php echo $d['nisn']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Calon Peserta Didik :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Nama" name="nama_siswa" value="<?php echo $d['nama_siswa']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Jenis Kelamin :</label>
      <div class="col-sm-2">
        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
     </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tempat Lahir :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggal Lahir :</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>">
      </div>
      (Bulan/Tanggal/Tahun)
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tahun lulus :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="Tahun lulus" name="tahun_lulus" value="<?php echo $d['tahun_lulus']; ?>">
      </div>
    </div>

    <br><h4>C. KEPENDUDUKAN CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NIK :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="NIK siswa dari KK" name="nik" value="<?php echo $d['nik']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Kartu keluarga (KK) :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="Nomor KK" name="no_kk" value="<?php echo $d['no_kk']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggl Diterbitkan KK :</label>
      <div class="col-sm-3">
        <input type="date" class="form-control"   placeholder="Tanggal KK terbit" name="tgl_kk" value="<?php echo $d['tgl_kk']; ?>">
      </div>
      (Bulan/Tanggal/Tahun)
    </div>

    <br><h4>D. DATA ALAMAT TEMPAT TINGGAL SESUAI KK CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kabupaten/Kota :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Kabupaten/Kota" name="kota" value="<?php echo $d['kota']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kecamatan :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Kecamatan" name="kecamatan" value="<?php echo $d['kecamatan']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kelurahan/Desa :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Kelurahan/Desa" name="kelurahan" value="<?php echo $d['kelurahan']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kode POS :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="Kode POS" name="kode_pos" value="<?php echo $d['kode_pos']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Alamat :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Alamat" name="alamat" value="<?php echo $d['alamat']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">RT :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="RT" name="rt" value="<?php echo $d['rt']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">RW :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="RW" name="rw" value="<?php echo $d['rw']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Jarak Alamat Siswa ke Sekolah :</label><b>Meter</b>
      <div class="col-sm-4">
        <input type="number" class="form-control"   placeholder="Jarak Rumah Ke Sekolah" name="jarak_kesekolah" value="<?php echo $d['jarak_kesekolah']; ?>">
      </div>
    </div>

    <br><h4>D. DATA ORANG TUA/WALI CALON PSERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Orang Tua/Wali :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Nama Orang Tua" name="nama_org_tua" value="<?php echo $d['nama_org_tua']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Pekerjaan Orang Tua/Wali :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Pekerjaan Orang Tua" name="pekerjaan_org_tua" value="<?php echo $d['pekerjaan_org_tua']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">PKH/KKS/KIP/Jamsosda<br>(Diisi jika memiliki) :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="PKH/KKS/KIP/Jamsosda" name="kip" value="<?php echo $d['kip']; ?>">
      </div>
    </div>

    <br><h4>F. INPUT NILAI UJIAN NASIONAL PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" >Nilai Bahasa Indonesia </label>
      <div class="col-sm-3">
        <input type="number" class="form-control"   placeholder="Nilai Bahasa Indonesia" name="un_bind" value="<?php echo $d['un_bind']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Nilai Bahasa Inggris </label>
      <div class="col-sm-3">
        <input type="number" class="form-control"   placeholder="Nilai Bahasa Inggris" name="un_bing" value="<?php echo $d['un_bing']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Nilai Matematika </label>
      <div class="col-sm-3">
        <input type="number" class="form-control"   placeholder="Nilai Matematika" name="un_mtk" value="<?php echo $d['un_mtk']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Nilai IPA </label>
      <div class="col-sm-3">
        <input type="number" class="form-control"   placeholder="Nilai IPA" name="un_ipa" value="<?php echo $d['un_ipa']; ?>">
      </div>
    </div>

<?php } ?>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="upload" value="upload" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

      <script>

      function validasi(){
        var x = document.forms["input"]["no_p"].value;
        if (x == null || x == "") {
          alert("Nomor Pnedaftaran Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["asal_sekolah"].value;
        if (x == null || x == "") {
          alert("Asal Sekolah Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["npsn_sekolah"].value;
        if (x == null || x == "") {
          alert("NPSN Sekolah Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["nisn"].value;
        if (x == null || x == "") {
          alert("NISN Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["nama_siswa"].value;
        if (x == null || x == "") {
          alert("Nama Siswa Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["tempat_lahir"].value;
        if (x == null || x == "") {
          alert("Tempat Lahir Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["tgl_lahir"].value;
        if (x == null || x == "") {
          alert("Tanggal Lahir tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["tahun_lulus"].value;
        if (x == null || x == "") {
          alert("Tahun Lulus Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["nik"].value;
        if (x == null || x == "") {
          alert("NIK Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["no_kk"].value;
        if (x == null || x == "") {
          alert("KK Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["tgl_kk"].value;
        if (x == null || x == "") {
          alert("Tanggal Terbit KK Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["kota"].value;
        if (x == null || x == "") {
          alert("Kota/Kabupaten Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["kecamatan"].value;
        if (x == null || x == "") {
          alert("kecamatan Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["kode_pos"].value;
        if (x == null || x == "") {
          alert("Kode Pos  Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["alamat"].value;
        if (x == null || x == "") {
          alert("Alamat Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["rt"].value;
        if (x == null || x == "") {
          alert("RT Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["rw"].value;
        if (x == null || x == "") {
          alert("RW Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["jarak_kesekolah"].value;
        if (x == null || x == "") {
          alert("Jarak Alamat ke Sekolah Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["nama_org_tua"].value;
        if (x == null || x == "") {
          alert("Nama Orang Tua/Wali Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["pekerjaan_org_tua"].value;
        if (x == null || x == "") {
          alert("Pekerjaan Orang Tua/Wali Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["pdf_skhun"].value;
        if (x == null || x == "") {
          alert("SKHUN Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["pdf_surat_dokter"].value;
        if (x == null || x == "") {
          alert("Surat Dokter Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["pdf_akta"].value;
        if (x == null || x == "") {
          alert("Akta Kelahiran Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["pdf_photo"].value;
        if (x == null || x == "") {
          alert("Photo Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["pdf_swa_kk"].value;
        if (x == null || x == "") {
          alert("SwaPhoto dan KK Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["un_bind"].value;
        if (x == null || x == "") {
          alert("Nilai Ujian Nasional Bahasa Indonesia Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["un_bing"].value;
        if (x == null || x == "") {
          alert("Nilai Ujian Nasional Bahasa Inggris Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["un_mtk"].value;
        if (x == null || x == "") {
          alert("Nilai Ujian Nasional Matematika Tidak Boleh Kosong");
          return false;
        }
        var x = document.forms["input"]["un_ipa"].value;
        if (x == null || x == "") {
          alert("Nilai Ujian Nasional IPA Tidak Boleh Kosong");
          return false;
        }

      }
      </script>

  </body>
</html>
