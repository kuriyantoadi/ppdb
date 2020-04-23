<!DOCTYPE html>
<html lang="en">
<head>
  <title>AKL - PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link href="../0-datepicker/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">


</head>
<body>

<div class="container">

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<center><img style="margin-top: 25px;" src="../../images/logo-banten.png" />
		</div>
		<div class="col-md-6">
      <center><h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2></center>
      <center><h4><b>Form Pendaftaran</b></h4></center>
      <center><h4><b>Calon Peserta Didik Baru</b></h4></center>
      <center><h5><b>Tahun Pelajaran 2020/2021</b></h4></center>
      <center><h4><b>Program Studi Akuntansi Keuangan Lembaga</b></h4></center><br>
      <!-- font ganti jenis -->
		</div>
		<div class="col-md-3">
      <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" alt="Bootstrap Image Preview" src="../../images/logo-smkn1.png" />
		</div>
	</div>
</div>

<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "
    <div class='alert alert-danger' role='alert'>
      <center>Maaf Password anda salah!
    </div>";
    } elseif ($_GET['pesan'] == "logout") {
        echo "
    <div class='alert alert-warning' role='alert'>
      <center>Anda Berhasil Logout
    </div>
    ";
    } elseif ($_GET['pesan'] == "belum_login") {
        echo "
    <div class='alert alert-danger' role='alert'>
      <center>Maaf anda harus login dulu
    </div>";
    }
}
?>

  <form class="form-horizontal" action="tambah-akl.php" name="input" method="POST"  enctype="multipart/form-data" onSubmit="return validasi()">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Pendaftaran :</label>
      <div class="col-sm-6">
        <input type="hidden" name="id" value="">
        <input type="text" class="form-control" value="Nomor Pendaftaran Otomatis dari Sistem" readonly>
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
        <input type="text" class="form-control"   placeholder=" " name="kompetensi_keahlian" value="Akuntansi Keuangan Lembaga" readonly>
      </div>
    </div>

    <br><h4>A. DATA ASAL SEKOLAH PESERTA DIDIK BARU</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Asal Sekolah :</label>
      <div class="col-sm-6">
          <select name="asal_sekolah" class="form-control" id="exampleFormControlSelect1" required>
            <option value="">Pilih Sekolah Asal</option>
            <option value="SMP NEGERI 1 KRAGILAN">SMP NEGERI 1 KRAGILAN</option>
            <option value="SMP NEGERI 2 KRAGILAN">SMP NEGERI 2 KRAGILAN</option>
            <option value="SMP NEGERI 3 KRAGILAN">SMP NEGERI 3 KRAGILAN</option>
            <option value="SMP NEGERI 4 KRAGILAN">SMP NEGERI 4 KRAGILAN</option>
            <option value="SMP YBB PGRI KRAGILAN">SMP YBB PGRI KRAGILAN</option>
            <option value="SMP PLUS INSAN CENDIKIA KRAGILAN">SMP PLUS INSAN CENDIKIA KRAGILAN</option>
            <option value="SMP IT AL HIDAYAH KRAGILAN">SMP IT AL HIDAYAH KRAGILAN</option>
            <option value="SMP MUHAMMADIYAH KRAGILAN">SMP MUHAMMADIYAH KRAGILAN</option>
            <option value="SMP PGRI KRAGILAN">SMP PGRI KRAGILAN</option>
            <option value="SMP PGRI 1 CARENANG">SMP PGRI 1 CARENANG</option>
            <option value="SMPN 1 CARENANG">SMPN 1 CARENANG</option>
            <option value="MTS AL-KHAIRIYAH PABUARAN">MTS AL-KHAIRIYAH PABUARAN</option>
            <option value="SMP NEGERI 1 JAWILAN">SMP NEGERI 1 JAWILAN</option>
            <option value="SMP NEGERI 3 CIKEUSAL">SMP NEGERI 3 CIKEUSAL</option>
            <option value="SEKOLAH AL-KHAIRIYAH CIKEUSAL">SEKOLAH AL-KHAIRIYAH CIKEUSAL</option>
            <option value="-">Nama Sekolah Tidak Ada</option>
          </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NPSN Sekolah Asal :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="NPSN Sekolah Asal" name="npsn_sekolah" required>
      </div>
    </div>

    <br><h4>B. IDENTITAS CALON PESERTA DIDIK BARU</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NISN :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="NISN" name="nisn" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Peserta Didik Baru :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Nama" name="nama_siswa" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Jenis Kelamin :</label>
      <div class="col-sm-2">
        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" required>
              <option value="">Pilih</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
          </select>
     </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tempat Lahir :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Tempat Lahir" name="tempat_lahir" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggal Lahir :</label>
      <div class="col-sm-3">
        <input type="text" name="tgl_lahir" class="form-control datepicker" />
      </div>
      (Tanggal/Bulan/Tahun)
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tahun lulus :</label>
      <div class="col-sm-3">
        <select name="tahun_lulus" class="form-control" id="exampleFormControlSelect1" required>
              <option value="">Pilih Tahun Lulus</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
            </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor WhatsApp :</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" name="no_hp" placeholder="Nomor WhatsApp" required>
      </div>
    </div>

    <br><h4>C. DATA KEPENDUDUKAN CALON PESERTA DIDIK BARU</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NIK :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="NIK siswa dari KK" name="nik" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Kartu keluarga (KK) :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="Nomor KK" name="no_kk" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggl Diterbitkan KK :</label>
      <div class="col-sm-3">
        <input type="text" name="tgl_kk" class="form-control datepicker" />
      </div>
      (Tanggal/Bulan/Tahun)
    </div>

    <br><h4>D. ALAMAT TEMPAT TINGGAL CALON PESERTA DIDIK BARU (SESUAI KK)</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kabupaten/Kota :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Kabupaten/Kota" name="kota" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kecamatan :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Kecamatan" name="kecamatan" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kelurahan/Desa :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Kelurahan/Desa" name="kelurahan" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kode POS :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="Kode POS" name="kode_pos" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Alamat :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Alamat" name="alamat" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">RT :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="RT" name="rt" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">RW :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder="RW" name="rw" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Jarak Alamat Siswa ke Sekolah :</label><b>Meter</b>
      <div class="col-sm-4">
        <input type="number" class="form-control"   placeholder="Jarak Rumah Ke Sekolah" name="jarak_kesekolah" required>
      </div>
    </div>
    <h6><b>Informasi</h6>
    <h6>1. Jarak alamat siswa ke sekolah bisa dicek dengan google maps</h6>
    <h6>2. Sekolah adalah SMK Negeri 1 Kragilan</h6>
    <h6>3. Contoh pengisian 1000 <b>tidak perlu ditulis Meter</h6>
    <h6>4. Jarak harus ditulis dalam satuan meter</h6>
    <h6>5. Jika Kartu Keluarga <b>Hilang</b> atau <b>Dalam Proses Pembuatan</b> bisa digantikan dengan surat keterangan domisili dari
    RT/RW/Kelurahan</h6>

    <br><h4>F. DATA ORANG TUA / WALI CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Orang Tua / Wali :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Nama Orang Tua" name="nama_org_tua" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Pekerjaan Orang Tua / Wali :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="Pekerjaan Orang Tua" name="pekerjaan_org_tua" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">PKH / KKS / KIP / Jamsosda<br>(Diisi jika memiliki) :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder="PKH/KKS/KIP/Jamsosda" name="kip" >
      </div>
    </div>

    <br><h4>F. INPUT SCAN BERKAS CALON PESERTA DIDIK</h4>

    <div class="form-group">
      <label class="control-label col-sm-2" >SKHUN atau Surat Keterangan Lulus</label>
      <div class="col-sm-6">
        <input type="file" name="pdf_skhun" accept="application/pdf" class="form-control-file" id="cek_skhu"  required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Surat Sehat dari Dokter </label>
      <div class="col-sm-6">
        <input type="file" name="pdf_surat_dokter" accept="application/pdf" class="form-control-file" id="cek_surat_dokter"   required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Kartu Keluarga (KK) </label>
      <div class="col-sm-6">
        <input type="file" name="pdf_kk" accept="application/pdf" class="form-control-file" id="cek_kk"   required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Akta Kelahiran </label>
      <div class="col-sm-6">
        <input type="file" name="pdf_akta" accept="application/pdf" class="form-control-file" id="cek_akta"   required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Photo </label>
      <div class="col-sm-6">
        <input type="file" name="pdf_photo" accept="application/pdf" class="form-control-file"  id="cek_photo"   required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >SwaPhoto dan KK </label>
      <div class="col-sm-6">
        <input type="file" name="pdf_swa_kk" accept="application/pdf" class="form-control-file" id="cek_swa_kk"   required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Piagam 1 </label>
      <div class="col-sm-6">
        <input type="file" name="pdf_piagam1" accept="application/pdf" class="form-control-file" id="cek_piagam1"   >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Piagam 2</label>
      <div class="col-sm-6">
        <input type="file" name="pdf_piagam2" accept="application/pdf" class="form-control-file" id="cek_piagam2"   >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Piagam 3 </label>
      <div class="col-sm-6">
        <input type="file" name="pdf_piagam3" accept="application/pdf" class="form-control-file" id="cek_piagam3"  >
      </div>
    </div>
    <h6><b>Informasi :</h6>
    <h6>1. File harus dengan format <b>.pdf</b> dengan ukuran maksimal <b>500 kb</b></h6>
    <h6>2. Dokumen yang di <b>Scan Harus Asli (bukan Photo Copy)</b></h6>
    <h6>3. Piagam boleh dikosongkan</h6>
    <h6>4. Piagam hasil perlombaan dan/atau penghargaan di bidang akademik maupun non akademik</h6>
    <h6>5. Contoh swa photo dapat dilihat di link berikut(belum di kerjakan)</h6>

    <br><h4>G. INPUT NILAI UJIAN NASIONAL PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" >Nilai Bahasa Indonesia </label>
      <div class="col-sm-3">
        <input type="number" class="form-control"   placeholder="Nilai Bahasa Indonesia" name="un_bind" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Nilai Bahasa Inggris </label>
      <div class="col-sm-3">
        <input type="number" class="form-control"   placeholder="Nilai Bahasa Inggris" name="un_bing" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Nilai Matematika </label>
      <div class="col-sm-3">
        <input type="number" class="form-control"   placeholder="Nilai Matematika" name="un_mtk" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Nilai IPA </label>
      <div class="col-sm-3">
        <input type="number" class="form-control"   placeholder="Nilai IPA" name="un_ipa" required>
      </div>
    </div>
    <h6><b>Informasi :</b></h6>
    <h6>1. Sebelum lanjut ke tahap berikut nya tolong nilai di cek kembali</h6>
    <h6>2. Jika nilai yang sudah di input tidak bisa di edit</h6>


    <br><h4>H. KONDISI FISIK DAN KEBIASAAN</h4>
      <div class="form-group">
        <label class="control-label col-sm-2" >Apakah anda bertindik (bagi laki-laki) </label>
        <div class="col-sm-2">
          <select name="bertindik" class="form-control" id="exampleFormControlSelect1" required>
                <option value="">Pilihan Anda</option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
                <option value="Perempuan">Saya Perempuan</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" >Apakah anda Perokok </label>
        <div class="col-sm-2">
          <select name="perokok" class="form-control" id="exampleFormControlSelect1" required>
            <option value="">Pilihan Anda</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
       </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" >Apakah anda pemakai Psikotropika<br>(Narkoba, Ganja dan sejenisnya) </label>
        <div class="col-sm-2">
          <select name="psikotropika" class="form-control" id="exampleFormControlSelect1" required>
            <option value="">Pilihan Anda</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
       </div>
      </div>
    <div class="form-group">
     <label class="control-label col-sm-2" >Apakah anda bertato </label>
     <div class="col-sm-2">
       <select name="bertato" class="form-control" id="exampleFormControlSelect1" required>
            <option value="">Pilihan Anda</option>
             <option value="Ya">Ya</option>
             <option value="Tidak">Tidak</option>
         </select>
      </div>
    </div>
    <div class="form-group">
     <label class="control-label col-sm-2" >Apakah anda peminum-minuman keras </label>
     <div class="col-sm-2">
       <select name="peminum" class="form-control" id="exampleFormControlSelect1" required>
            <option value="">Pilihan Anda</option>
             <option value="Ya">Ya</option>
             <option value="Tidak">Tidak</option>
         </select>
      </div>
    </div>
    <div style="margin-top:  50px;">
    </div>
    <h6><b>INFORMASI PENTING:</h6>
    <h6>Sebelum anda submit pastikan data yang diisi benar, panitia tidak menerima komplain<br>
      atau perubahan data. Apabila data tidak sesuai, maka sekolah berhak membatalkan hasil penerimaan siswa tersebut.<br></h6>
    <div style="margin-top:  30px;">
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="upload" value="upload" class="btn btn-default"
        onclick="if (eval(ukuran)>0.5) { alert('Ukuran file pdf melebihi batas yaitu 500Kb'); return false; } else { return true; }">Submit</button>
      </div>
    </div>
  </form>
</div>

    <!-- <script src="../datepicker/js/jquery.min.js"></script>
    <script src="../datepicker/js/bootstrap.min.js"></script> -->
    <script src="../0-datepicker/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="../0-datepicker/js/custom.js"></script>

    <script>
    $(document).ready(function(){
        setDatePicker()
        setDateRangePicker(".startdate", ".enddate")
        setMonthPicker()
        setYearPicker()
        setYearRangePicker(".startyear", ".endyear")
    })
    </script>


    <script type="text/javascript">
    var uploadField = document.getElementById("cek_akta");
    uploadField.onchange = function() {
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf akta anda melebihi 500 KB");
          this.value = "";
        };
      };

    var uploadField = document.getElementById("cek_kk");
    uploadField.onchange = function() {
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf KK anda melebihi 500 KB");
          this.value = "";
        };
      };

    var uploadField = document.getElementById("cek_photo");
    uploadField.onchange = function() {
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf Photo anda melebihi 500 KB");
          this.value = "";
        };
      };

    var uploadField = document.getElementById("cek_piagam1");
    uploadField.onchange = function() {
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf Piagam 1 anda melebihi 500 KB");
          this.value = "";
        };
      };
    var uploadField = document.getElementById("cek_piagam2");
    uploadField.onchange = function() {
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf Piagam 2 anda melebihi 500 KB");
          this.value = "";
        };
      };
    var uploadField = document.getElementById("cek_piagam3");
    uploadField.onchange = function() {
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf Piagam 3 anda melebihi 500 KB");
          this.value = "";
        };
      };
    var uploadField = document.getElementById("cek_swa_kk");
    uploadField.onchange = function() {
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf Swa Photo dengan KK anda melebihi 500 KB");
          this.value = "";
        };
      };
    var uploadField = document.getElementById("cek_surat_dokter");
    uploadField.onchange = function() {
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf Surat Dokter anda melebihi 500 KB");
          this.value = "";
        };
      };
    var uploadField = document.getElementById("cek_skhu");
    uploadField.onchange = function() {
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf SKHU anda melebihi 500 KB");
          this.value = "";
        };
        if(this.files[0].size > 500000){
          alert("Maaf ukuran file pdf SKHU anda melebihi 500 KB");
          this.value = "";
        };
      };
    </script>

  </body>
</html>
