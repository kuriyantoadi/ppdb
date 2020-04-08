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

  <br><br><br>

  <div class="form-group">
    <div class="col-sm-7">
      <a href="../logout.php" type="button" class="btn btn-danger">Logout</a>
    </div>
    <label class="control-label col-sm-2" for="email">Cari Peserta Calon Peserta Didik :</label>
    <div class="col-sm-3">
      <input type='text' class="form-control"  id='input' onkeyup='searchTable()'>
    </div>


  </div>

  <table class="table table-bordered table-hover" id="domainsTable">
  <thead>
    <tr>
      <th><center>No</th>
      <th><center>Nomor Pendaftaran</th>
      <th><center>NISN Siswa</th>
      <th><center>Nama Siswa</th>
      <th><center>Kompetensi Keahlian</th>
      <th><center>Asal Sekolah</th>
      <th><center>Kondisi</th>
      <th><center>Lihat</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include '../../koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi,"select * from f_siswa");
      while($d = mysqli_fetch_array($data)) {
    ?>

    <tr>
      <td><center><?php echo $no++ ?></td>
      <td><center><?php echo $d['nomor_pendaftaran']; ?></td>
      <td><center><?php echo $d['nisn']; ?></td>
      <td><center><?php echo $d['nama_siswa']; ?></td>
      <td><center><?php echo $d['kompetensi_keahlian']; ?></td>
      <td><center><?php echo $d['asal_sekolah']; ?></td>
      <td><center><?php echo $d['kondisi']; ?></td>
      <td><center>
        <a type="button" class="btn btn-info btn-sm" href="tampil-siswa.php?nomor_pendaftaran=<?php echo $d['nomor_pendaftaran']; ?>" >Lihat</a>
      </td>
    </tr>


    <?php } ?>
  </tbody>
</table>
</div>
<script>
    $(document).ready(function()
        {
            $("#domainsTable").tablesorter({sortList: [[3,1],[2,0]]});
        }
    );

    function searchTable() {
        var input;
        var saring;
        var status;
        var tbody;
        var tr;
        var td;
        var i;
        var j;
        input = document.getElementById("input");
        saring = input.value.toUpperCase();
        tbody = document.getElementsByTagName("tbody")[0];;
        tr = tbody.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
                    status = true;
                }
            }
            if (status) {
                tr[i].style.display = "";
                status = false;
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    </script>
</body>
</html>