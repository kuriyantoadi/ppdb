<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="../stylesheet" href="css/bootstrap.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- awal -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">Form Registrasi Jaringan Baru</div>
                      <div class="card-body">

              <!--awal -->
              <form action="cek_login.php" method="post">
              <div class="col-md-12">
                <a type="button" class="btn btn-warning btn-sm" href="fo-input.php">Mengisi Form Registrasi Jaringan Baru</a>
                <a type="button" class="btn btn-primary btn-sm" href="lap-fo.php">Download Excel</a>
                <br><br>
                <table class="table table-hover">
                  <tr>
              			<th>No</th>
                    <td>Tanggal Input</td>
              			<th>Node ID</th>
              			<th>Node Deskription</th>
              			<th>Regional</th>
              			<th>Hub Name</th>
                    <th>Rack</th>
                    <th>Jarak Normal</th>
                    <th>PIC</th>
                    <td>Kondisi</td>
                    <th>Edit</th>
                    <th>Hapus</th>
              		</tr>
                  <?php
                  include '../koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from t_fo");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['tgl']; ?></td>
                      <td><?php echo $d['node_id']; ?></td>
                      <td><?php echo $d['node_des']; ?></td>
                      <td><?php echo $d['regional']; ?></td>
                      <td><?php echo $d['hub_name']; ?></td>
                      <td><?php echo $d['rack']; ?></td>
                      <td><?php echo $d['jarak_normal']; ?></td>
                      <td><?php echo $d['pic']; ?></td>
                      <td><?php echo $d['kondisi']; ?></td>
                      <td>
                        <a type="button" class="btn btn-success btn-sm" href="fo-edit.php?node_id=<?php echo $d['node_id']; ?>">Edit</a>
                      </td>
                      <td>
                        <a type="button" class="btn btn-danger btn-sm" href="fo-hapus.php?node_id=<?php echo $d['node_id']; ?>" onclick="return confirm('Anda yakin menhapus data ini ?')" >Hapus</a>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>

                  </table>
                </div>
              </div>

  </body>
</html>
