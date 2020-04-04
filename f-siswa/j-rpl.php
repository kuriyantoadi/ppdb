<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center><h2>Form Pendaftaran Calon Peserta Didik</h2></center>
  <center><h2>SMKN 1 Kragilan</h2></center>

  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Pendaftaran :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="" value="a" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggal Pendaftaran :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="" value="<?php echo date('d-m-Y'); ?>" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kompetensi Keahlian :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="" value="Rekayasa Perangkat Lunak" readonly>
      </div>
    </div>

    <br><h4>A. DATA ASAL SEKOLAH CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Asal Sekolah :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NPSN Sekolah Asal :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder=" " name="">
      </div>
    </div>

    <br><h4>B. IDENTITAS CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NISN :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Calon Peserta Didik :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Jenis Kelamin :</label>
      <div class="col-sm-2">
        <select class="form-control" id="exampleFormControlSelect1">
              <option>Laki-laki</option>
              <option>Perempuan</option>
            </select>
     </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tempat Lahir :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggal Lahir :</label>
      <div class="col-sm-2">
        <input type="date" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tahun lulus :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder=" " name="">
      </div>
    </div>

    <br><h4>C. KEPENDUDUKAN CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NIK :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Kartu keluarga (KK) :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggl Diterbitkan KK :</label>
      <div class="col-sm-6">
        <input type="date" class="form-control"   placeholder=" " name="">
      </div>
    </div>

    <br><h4>D. DATA ALAMAT TEMPAT TINGGAL SESUAI KK CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kabupaten/Kota :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kecamatan :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Keluarahan/Desa :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kode POS :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Alamat :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">RT :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">RW :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Jarak Alamat Siswa ke Seklah Tujuan<br>(dalam meter) :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control"   placeholder=" " name="">
      </div>
    </div>

    <br><h4>D. DATA ORANG TUA/WALI CALON PSERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Orang Tua/Wali :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Pekerjaan Orang Tua/Wali :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">PKH/KKS/KIP/Jamsosda<br>(Diisi jika memiliki) :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control"   placeholder=" " name="">
      </div>
    </div>

    <br><h4>E. INPUT SCAN BERKAS CALON PERSERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" >SKHUN </label>
      <div class="col-sm-6">
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Suhat Sehat dari Dokter </label>
      <div class="col-sm-6">
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Kartu Keluarga (KK) </label>
      <div class="col-sm-6">
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Akta Kelahiran </label>
      <div class="col-sm-6">
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Photo </label>
      <div class="col-sm-6">
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Piagram(Jika ada) </label>
      <div class="col-sm-6">
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
