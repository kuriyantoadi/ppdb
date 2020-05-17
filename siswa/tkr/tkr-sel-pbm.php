<!DOCTYPE html>
<html lang="en">

<head>
  <title>Calon Siswa sudah Mendaftar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../js/jquery-latest.js"></script>
  <script type="text/javascript" src="../../js/jquery.tablesorter.min.js"></script>
</head>

<body>



  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <center><img style="margin-top: 25px;" src="../../images/logo-banten.png" />
      </div>
      <div class="col-md-6">
        <center>
          <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
        </center>
        <center>
          <h4><b>Pengumuman Jadwal Seleksi Penelusuran Bakat dan Minat</b></h4>
        </center>

        <center>
          <h5><b>Tahun Pelajaran 2020/2021</b></h4>
        </center>
        <center>
          <h4><b>Program Studi Teknik Kendaraan Ringan</b></h4>
        </center><br>
        <!-- font ganti jenis -->
      </div>
      <div class="col-md-3">
        <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" alt="Bootstrap Image Preview" src="../../images/logo-smkn1.png" />
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Cari Peserta Calon Peserta Didik :</label>
      <div class="col-sm-3">
        <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
      </div>


    </div>
    <table class="table table-bordered table-hover" id="domainsTable">
      <thead>
        <tr>
          <th>
            <center>No
          </th>
          <th>
            <center>Nomor Pendaftaran
          </th>
          <th>
            <center>NISN Siswa
          </th>
          <th>
            <center>Nama Siswa
          </th>
          <th>
            <center>Asal Sekolah
          </th>
          <!-- Data di buka bos :) -->
          <th>
            <center>Tanggal
          </th>
          <th>
            <center>Waktu
          </th>
        </tr>
      </thead>
      <tbody>
        <?php
      include '../../koneksi.php';

      $data = mysqli_query($koneksi, "SELECT
        no_p,
        nisn,
        nama_siswa,
        kompetensi_keahlian,
        asal_sekolah,id,
        tanggal,
        waktu
        from jadwal_pbm where kompetensi_keahlian='Teknik Kendaraan Ringan'  ");
      $no = 1;


      while ($d = mysqli_fetch_array($data)) {
          ?>

        <tr>
          <td>
            <center><?php echo $no++ ?>
          </td>
          <td>
            <center><?php echo $d['no_p']; ?>
          </td>
          <td>
            <center><?php echo $d['nisn']; ?>
          </td>
          <td>
            <center><?php echo $d['nama_siswa']; ?>
          </td>
          <td>
            <center><?php echo $d['asal_sekolah']; ?>
          </td>
          <!-- Data di buka bos :) -->
          <td>
            <center><?php echo $d['tanggal']; ?>
          </td>
          <td>
            <center><?php echo $d['waktu']; ?>
          </td>
        </tr>

        <?php
      } ?>
      </tbody>
    </table>
    <div>

    </div>
    </div>
    <script>
    $(document).ready(function() {
      $("#domainsTable").tablesorter({
        sortList: [
          [3, 1],
          [2, 0]
        ]
      });
    });

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
