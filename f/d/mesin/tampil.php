<br><br><br>
<a style="margin-right: 10px;" type="button" class="btn btn-danger btn-md" href="index.php">Kembali</a>
<a style="margin-right: 25px;" type="button" class="btn btn-warning btn-md" href="../../../siswa/mesin/tampil-mesin.php?nik=<?php echo $d['nik']; ?>">Cetak PDF</a>


<table class="table table-bordered">
  <form class="" action="mesin-proses.php" method="post">
    <tr>
      <td>Nomor Pendaftaran</td>
      <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
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
      <td>Tinggi Badan</td>
      <td><?php echo $d['tinggi_bdn']; ?> cm</td>
    </tr>
    <tr>
      <td>
        SKHUN
        <br>Nama Siswa : <b> <?php echo $d['nama_siswa']; ?> </b>
        <br>Nilai Bahasa Indonesia : <b><?php echo $d['un_bind']; ?></b>
        <br>Nilai Bahasa Inggris : <b><?php echo $d['un_bing']; ?></b>
        <br>Nilai Matematika : <b><?php echo $d['un_mtk']; ?></b>
        <br>Nilai IPA : <b><?php echo $d['un_ipa']; ?></b>
        <br>
        <select name="val_skhun" class="form-control" required>
          <option value="<?php echo $d['val_skhun']; ?>">(Kondisi Awal) <?php echo $d['val_skhun']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/mesin/file/<?php echo $d['pdf_skhun']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Surat Sehat dari Dokter
        <select name="val_surat_dokter" class="form-control" required>
          <option value="<?php echo $d['val_surat_dokter']; ?>">(Kondisi Awal) <?php echo $d['val_surat_dokter']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/mesin/file/<?php echo $d['pdf_surat_dokter']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Kartu Keluarga
        <br>NIK : <b> <?php echo $d['no_kk']; ?> </b>
        <br>Nomor KK : <b><?php echo $d['un_bind']; ?></b>
        <br>Tanggal KK Terbit : <b><?php echo $d['tgl_kk']; ?></b>
        <br>
        <select name="val_kk" class="form-control" required>
          <option value="<?php echo $d['val_kk']; ?>">(Kondisi Awal) <?php echo $d['val_kk']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/mesin/file/<?php echo $d['pdf_kk']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Akta Kelahiran
        <select name="val_akta" class="form-control" required>
          <option value="<?php echo $d['val_akta']; ?>">(Kondisi Awal) <?php echo $d['val_akta']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>

      <td>
        <embed src="../../../siswa/mesin/file/<?php echo $d['pdf_akta']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Photo
        <select name="val_photo" class="form-control" required>
          <option value="<?php echo $d['val_photo']; ?>">(Kondisi Awal) <?php echo $d['val_photo']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/mesin/file/<?php echo $d['pdf_photo']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>SwaPhoto
        <select name="val_swaphoto" class="form-control" required>
          <option value="<?php echo $d['val_swaphoto']; ?>">(Kondisi Awal) <?php echo $d['val_swaphoto']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/mesin/file/<?php echo $d['pdf_swa_kk']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Piagam 1
        <select name="val_piagam1" class="form-control" required>
          <option value="<?php echo $d['val_piagam1']; ?>">(Kondisi Awal) <?php echo $d['val_piagam1']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/mesin/file/<?php echo $d['pdf_piagam1']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Piagam 2
        <select name="val_piagam2" class="form-control" required>
          <option value="<?php echo $d['val_piagam2']; ?>">(Kondisi Awal) <?php echo $d['val_piagam2']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/mesin/file/<?php echo $d['pdf_piagam2']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
    <tr>
      <td>Piagam 3
        <select name="val_piagam3" class="form-control" required>
          <option value="<?php echo $d['val_piagam3']; ?>">(Kondisi Awal) <?php echo $d['val_piagam3']; ?></option>
          <option value="Data Sesuai">Data Sesuai</option>
          <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
        </select>
      </td>
      <td>
        <embed src="../../../siswa/mesin/file/<?php echo $d['pdf_piagam3']; ?>" type="application/pdf" width="100%" height="500px">
      </td>
    </tr>
  </table>

        <center>
          <select style="margin-top: 25px;  width: 30%;" name="kondisi" class="form-control" required>
            <option value="<?php echo $d['kondisi']; ?>">(Kondisi Awal) <?php echo $d['kondisi']; ?></option>
            <option value="Siswa Lolos Seleksi">Siswa Lolos Seleksi</option>
            <option value="Siswa Tidak Lolos Seleksi">Siswa Tidak Lolos Seleksi</option>
          </select>

      <input style="margin-top: 25px; margin-bottom: 80px;" type="submit" name="submit" value="submit" class="btn btn-success">
  </form>
