<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

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

<!--
				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
      -->
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
