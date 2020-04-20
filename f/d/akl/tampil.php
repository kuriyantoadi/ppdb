
<br><br><br>
<a type="button" class="btn btn-danger btn-md" href="index.php">Kembali</a>
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
    <td>Jarak rumah ke sekolah</td>
    <td><?php echo $d['jarak_kesekolah']; ?></td>
  </tr>
  <tr>
    <td>Nama Orang Tua/Wali</td>
    <td><?php echo $d['nama_org_tua']; ?></td>
  </tr>
  <tr>
    <td>Pekerjaan Orang Tua</td>
    <td><?php echo $d['pekerjaan_org_tua']; ?></td>
  </tr>
  <tr>
    <td>PKH/KKS/KIP/Jamsosda</td>
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
    <td>Kondisi</td>
    <td><?php echo $d['kondisi']; ?></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><?php echo $d['username']; ?></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><?php echo $d['password']; ?></td>
  </tr>
  <tr>
    <td>Enkripsi</td>
    <td><?php echo $d['enk']; ?></td>
  </tr>
  <tr>
    <td>Bertindik</td>
    <td><?php echo $d['bertindik']; ?></td>
  </tr>
  <tr>
    <td>Perokok</td>
    <td><?php echo $d['perokok']; ?></td>
  </tr>
  <tr>
    <td>Psikotropika</td>
    <td><?php echo $d['psikotropika']; ?></td>
  </tr>
  <tr>
    <td>Bertato</td>
    <td><?php echo $d['bertato']; ?></td>
  </tr>
  <tr>
    <td>Peminum</td>
    <td><?php echo $d['peminum']; ?></td>
  </tr>
  <tr>
    <td>
      SKHUN
      <br>Nama Siswa : <b> <?php echo $d['nama_siswa']; ?> </b>
      <br>Nilai Bahasa Indonesia : <b><?php echo $d['un_bind']; ?></b>
      <br>Nilai Bahasa Inggris   : <b><?php echo $d['un_bing']; ?></b>
      <br>Nilai Matematika       : <b><?php echo $d['un_mtk']; ?></b>
      <br>Nilai IPA              : <b><?php echo $d['un_ipa']; ?></b>

    <td>
      <embed src="../../../siswa/rpl/file/<?php echo $d['pdf_skhun']; ?>" type="application/pdf" width="100%" height="500px">
    </td>
  </tr>
  <tr>
    <td>Surat Sehat dari Dokter</td>
    <td>
      <embed src="../../../siswa/rpl/file/<?php echo $d['pdf_surat_dokter']; ?>" type="application/pdf" width="100%" height="500px">
    </td>
  </tr>
  <tr>
    <td>Kartu Keluarga
      <br>NIK           : <b> <?php echo $d['no_kk']; ?> </b>
      <br>Nomor KK      : <b><?php echo $d['un_bind']; ?></b>
      <br>Tanggal KK Terbit : <b><?php echo $d['tgl_kk']; ?></b>
    </td>
    <td>
      <embed src="../../../siswa/rpl/file/<?php echo $d['pdf_kk']; ?>" type="application/pdf" width="100%" height="500px">
    </td>
  </tr>
  <tr>
    <td>Akta Kelahiran</td>
    <td>
      <embed src="../../../siswa/rpl/file/<?php echo $d['pdf_akta']; ?>" type="application/pdf" width="100%" height="500px">
    </td>
  </tr>
  <tr>
    <td>Photo</td>
    <td>
      <embed src="../../../siswa/rpl/file/<?php echo $d['pdf_photo']; ?>" type="application/pdf" width="100%" height="500px">
    </td>
  </tr>
  <tr>
    <td>SwaPhoto</td>
    <td>
      <embed src="../../../siswa/rpl/file/<?php echo $d['pdf_swa_kk']; ?>" type="application/pdf" width="100%" height="500px">
    </td>
  </tr>
  <tr>
    <td>Piagam 1</td>
    <td>
      <embed src="../../../siswa/rpl/file/<?php echo $d['pdf_piagam1']; ?>" type="application/pdf" width="100%" height="500px">
    </td>
  </tr>
  <tr>
    <td>Piagam 2</td>
    <td>
      <embed src="../../../siswa/rpl/file/<?php echo $d['pdf_piagam2']; ?>" type="application/pdf" width="100%" height="500px">
    </td>
  </tr>
  <tr>
    <td>Piagam 3</td>
    <td>
      <embed src="../../../siswa/rpl/file/<?php echo $d['pdf_piagam3']; ?>" type="application/pdf" width="100%" height="500px">
    </td>
  </tr>
