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
    <table>
      <tr>
        <td>
          <center><img style="margin-bottom:  80px; margin-top:  25px; margin-right: 90px" src="../../images/logo-banten-cetak.png" />
        </td>
        <td>
          <center><h4 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h4></center>
          <center><h5><b>Bukti Pendaftaran Calon Peserta Didik Baru</b></h5></center>
          <center><h5><b>Calon Peserta Didik Baru</b></h5></center>
          <center><h5><b>Tahun Pelajaran 2020/2021</b></h5></center>
          <center><h5><b>Program Studi Akuntansi Keuangan Lembaga</b></h5></center><br>
        </td>
        <td>
          <center><img style="margin-bottom:  80px; margin-top:  25px; margin-left: 90px" src="../../images/logo-smkn1-cetak.png" />
        </td>
      </tr>
    </table>


    <?php
      include '../../koneksi.php';
      $nik = $_GET['nik'];
      $data = mysqli_query($koneksi, "select

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
      id,
      username,
      password,
      enk,
      bertindik,
      psikotropika,
      bertato,
      perokok,
      peminum,
      tinggi_bdn

       from f_siswa_mesin where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {
          ?>

    <table class="table table-bordered">
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
        <td>Jenis Kelamin</td>
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
        <td>Jarak Rumah ke Sekolah</td>
        <td><?php echo $d['jarak_kesekolah']; ?> Meter</td>
      </tr>
      <tr>
        <td>Nama Orang Tua / Wali</td>
        <td><?php echo $d['nama_org_tua']; ?></td>
      </tr>
      <tr>
        <td>Pekerjaan Orang Tua</td>
        <td><?php echo $d['pekerjaan_org_tua']; ?></td>
      </tr>
      <tr>
        <td>PKH / KKS / KIP / Jamsosda</td>
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
        <td>Username Test</td>
        <td><?php echo $d['username']; ?></td>
      </tr>
      <tr>
        <td>Password Test</td>
        <td><?php echo $d['password']; ?></td>
      </tr>
      <tr>
        <td>Enkripsi </td>
        <td><?php echo $d['enk']; ?></td>
      </tr>
      <tr>
        <td>Bertindik </td>
        <td><?php echo $d['bertindik']; ?></td>
      </tr>
      <tr>
        <td>Perokok </td>
        <td><?php echo $d['perokok']; ?></td>
      </tr>
      <tr>
        <td>Psikotropika </td>
        <td><?php echo $d['psikotropika']; ?></td>
      </tr>
      <tr>
        <td>Bertato </td>
        <td><?php echo $d['bertato']; ?></td>
      </tr>
      <tr>
        <td>Peminum Minuman Keras</td>
        <td><?php echo $d['peminum']; ?></td>
      </tr>
      <tr>
        <td>Tinggi Badan</td>
        <td><?php echo $d['tinggi_bdn']; ?> cm</td>
      </tr>
      <tr>
        <td colspan="2">
          <p>
            <b>Informasi :</b>
            <ol>
              <li>Bukti pendaftaran agar dicetak, minimal 1 lembar, sebagai bukti Pendaftaran.</li>
              <!-- <li>Bukti pendaftaran hanya muncul 1 kali ketika daftar.</li> -->
              <!-- <li>Bukti pendaftaran tidak boleh disebar luaskan untuk kepentingan apapun.</li> -->
              <!-- <li>Setiap calon peserta didik baru bertanggung jawab atas bukti pendaftaran.</li> -->
              <li>Username dan Password Tes hanya dapat dipakai di Web smkn1kragilan.sch.id.</li>
              <li>Username dan Password Tes hanya dapat digunakan 1 kali.</li>
              <li>Peserta yang dinyatakan tidak lolos pemberkasan/seleksi administrasi maka tidak bisa mengikuti Tes Penelurusan Minat dan Bakat.</li>
              <li>Jika ada peserta yang sudah dinyatakan lolos dan tidak bisa masuk ke login web Tes Penelurusan Minat dan Bakat segera menghubungi panitia bagian informasi.</li>
              <li>Tes dilaksanakan secara online di tempat tinggal masing-masing calon peserta didik.</li>
              <li>Jika calon peserta didik melakukan kecurangan ketika mengerjakan soal tes, maka akan dinyatakan gugur dari pendaftaran.</li>
              <!-- <li>Jika ada kesalahan data diri pada bukti pendaftaran (hanya data diri), calon peserta didik harus menginformasikan kepada panitia bagian informasi.</li> -->
              <li>Apabila ditemukan data yang tidak sesuai calon peserta didik baru maka sekolah berhak untuk membatalkan hasil seleksi pendaftaran.</li>
              <!-- <li>Spesifikasi laptop minimal RAM 4GB, Prosessor setara Intel Core I3 dan Hardisk Minimal 150GB</li> -->
            </ol>
            </ol>
          </p>
        </td>
      </tr>
    </table>
    <img width="200px" align="right" src="../../images/stampel.png" style="margin-right:  80px;"/>

    <center>
  <?php
      } ?>
<br><br><br>

      </div>
    </div>
</div>
</div>

<script>
    window.print();
  </script>


  </body>
</html>
