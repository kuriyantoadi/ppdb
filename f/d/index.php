<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./js/jquery-latest.js"></script>
  <script type="text/javascript" src="./js/jquery.tablesorter.min.js"></script>
</head>
<body>

  <?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  ?>

<div class="container">
  <center><h2>Form Pendaftaran Calon Peserta Didik</h2></center>
  <center><h2>SMKN 1 Kragilan</h2></center>


  <br><a href="../logout.php" type="button" class="btn btn-danger">Logout</a><br><br>

  <table class="table table-bordered table-hover" id="domainsTable">
  <thead>
    <tr>
      <th><center>No</th>
      <th><center>NISN Siswa</th>
      <th><center>Nama Siswa</th>
      <th><center>Pilih Jurusan</th>
      <th><center>Asal Sekolah</th>
      <th><center>View</th>
      <th><center>Kondisi</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td><center>1</td>
      <td>001</td>
      <td>Admin</td>
      <td>TKJ</td>
      <td>Asal Sekolah</td>
      <td>
        <center>
          <a href="#" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-pencil"></span>
          </a>
      </td>
      <td>
        <center>Acc</center>
      </td>
    </tr>
    <tr>
      <td><center>1</td>
      <td>002</td>
      <td>jok</td>
      <td>RPL</td>
      <td>Asal Sekolah</td>
      <td>
        <center>
          <a href="#" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-pencil"></span>
          </a>
      </td>
      <td>
        <center>Acc</center>
      </td>
    </tr>
  </tbody>
</table>
</div>
<script>
    $(document).ready(function()
        {
            $("#domainsTable").tablesorter({sortList: [[3,1],[2,0]]});
        }
    );
    </script>
</body>
</html>
