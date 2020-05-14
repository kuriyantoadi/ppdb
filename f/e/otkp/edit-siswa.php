<?php
session_start();
if ($_SESSION['status']!="admin") {
    header("location:../../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">

  <script src="../../../js/bootstrap.min.js"></script>

  <link href="../../../siswa/0-datepicker/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>

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
  <form class="form-horizontal" action="update-siswa.php" name="input" method="POST"  enctype="multipart/form-data" onSubmit="return validasi()">

    <?php
      include '../../../koneksi.php';
      $id = $_GET['id'];
      $data = mysqli_query($koneksi, "select * from f_siswa_otkp where id='$id'");
      while ($d = mysqli_fetch_array($data)) {
          ?>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Pendaftaran :</label>
      <div class="col-sm-6">
        <input type="text" name="id" value="<?php echo $d['id']; ?>" hidden>
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
        <select name="kompetensi_keahlian" class="form-control" >
              <option value="<?php echo $d['kompetensi_keahlian']; ?>">Jurusan Awal (<?php echo $d['kompetensi_keahlian']; ?>)</option>
              <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
              <option value="Akuntansi Keuangan Lembaga">Akuntansi Keuangan Lembaga</option>
              <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
              <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
              <option value="Teknik Pemesinan">Teknik Pemesinan</option>
            </select>
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
        <select name="jenis_kelamin" class="form-control" >
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
        <input type="text" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>"  class="form-control datepicker" />
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
      <label class="control-label col-sm-2" for="email">Tanggal Diterbitkan KK :</label>
      <div class="col-sm-3">
        <input type="text" name="tgl_kk" value="<?php echo $d['tgl_kk']; ?>" class="form-control datepicker" />
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
        <input type="number" class="form-control"   placeholder="Jarak Rumah ke Sekolah" name="jarak_kesekolah" value="<?php echo $d['jarak_kesekolah']; ?>">
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
    <br><h4>H. KONDISI FISIK DAN KEBIASAAN</h4>
      <div class="form-group">
        <label class="control-label col-sm-2" >Apakah anda bertindik (bagi laki-laki) </label>
        <div class="col-sm-2">
          <select name="bertindik" class="form-control" required>
                <option value="<?php echo $d['bertindik']; ?>"> <?php echo $d['bertindik']; ?> </option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
                <option value="Perempuan">Saya Perempuan</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" >Apakah anda Perokok </label>
        <div class="col-sm-2">
          <select name="perokok" class="form-control" value="<?php echo $d['perokok']; ?>" required>
            <option value="<?php echo $d['perokok']; ?>"> <?php echo $d['perokok']; ?> </option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
       </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" >Apakah anda pemakai Psikotropika<br>(Narkoba, Ganja dan sejenisnya) </label>
        <div class="col-sm-2">
          <select name="psikotropika" class="form-control" required>
            <option value="<?php echo $d['psikotropika']; ?>" > <?php echo $d['psikotropika']; ?> </option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
       </div>
      </div>
    <div class="form-group">
     <label class="control-label col-sm-2" >Apakah anda bertato </label>
     <div class="col-sm-2">
       <select name="bertato" class="form-control" required>
         <option value='<?php echo $d['bertato']; ?>'> <?php echo $d['bertato']; ?> </option>
             <option value="Ya">Ya</option>
             <option value="Tidak">Tidak</option>
         </select>
      </div>
    </div>
    <div class="form-group">
     <label class="control-label col-sm-2" >Apakah anda peminum-minuman keras </label>
     <div class="col-sm-2">
       <select name="peminum" class="form-control" required>
         <option value="<?php echo $d['peminum']; ?>" > <?php echo $d['peminum']; ?> </option>
             <option value="Ya">Ya</option>
             <option value="Tidak">Tidak</option>
         </select>
      </div>
    </div>


<?php
      } ?>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="upload" value="upload" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

<?php  ?>
    <script src="../../../siswa/0-datepicker/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="../../../siswa/0-datepicker/js/custom.js"></script>

    <script>
    $(document).ready(function(){
        setDatePicker()
        setDateRangePicker(".startdate", ".enddate")
        setMonthPicker()
        setYearPicker()
        setYearRangePicker(".startyear", ".endyear")
    })
    </script>

  </body>
</html>
