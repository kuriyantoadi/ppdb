
<br><br><br>
<a type="button" class="btn btn-danger btn-md" href="rpl-op.php">Kembali</a>
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
    <td>jenis Kelamin</td>
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
    <td>SKHUN</td>
    <td>
      <a type="button" class="btn btn-info btn-sm" href="../../siswa/rpl/file/<?php echo $d['pdf_skhun']; ?>">SKHU PDF</a>
    </td>
  </tr>
  <tr>
    <td>Surat Sehat dari Dokter</td>
    <td>
      <a type="button" class="btn btn-info btn-sm" href="../../siswa/rpl/file/<?php echo $d['pdf_surat_dokter']; ?>">Surat Dokter PDF</a>
    </td>
  </tr>
  <tr>
    <td>Kartu Keluarga</td>
    <td>
      <a type="button" class="btn btn-info btn-sm" href="../../siswa/rpl/file/<?php echo $d['pdf_kk']; ?>">Kartu Keluarga PDF</a>
    </td>
  </tr>
  <tr>
    <td>Akta Kelahiran</td>
    <td>
      <a type="button" class="btn btn-info btn-sm" href="../../siswa/rpl/file/<?php echo $d['pdf_akta']; ?>">Akta Kelahiran  PDF</a>
    </td>      </tr>
  <tr>
    <td>Photo</td>
    <td>
      <a type="button" class="btn btn-info btn-sm" href="../../siswa/rpl/file/<?php echo $d['pdf_photo']; ?>">Photo PDF</a>
    </td>
  </tr>
  <tr>
    <td>SwaPhoto</td>
    <td>
      <a type="button" class="btn btn-info btn-sm" href="../../siswa/rpl/file/<?php echo $d['pdf_swa_kk']; ?>">SwaPhoto PDF</a>
    </td>
  </tr>
  <tr>
    <td>Piagam 1</td>
    <td>
      <a type="button" class="btn btn-info btn-sm" href="../../siswa/rpl/file/<?php echo $d['pdf_piagam1']; ?>">Piagam 1 PDF</a>
    </td>
  </tr>
  <tr>
    <td>Piagam 2</td>
    <td>
      <a type="button" class="btn btn-info btn-sm" href="../../siswa/rpl/file/<?php echo $d['pdf_piagam2']; ?>">Piagam 2 PDF</a>
    </td>
  </tr>
  <tr>
    <td>Piagam 3</td>
    <td>
      <a type="button" class="btn btn-info btn-sm" href="../../siswa/rpl/file/<?php echo $d['pdf_piagam3']; ?>">Piagam 3 PDF</a>
    </td>
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
  
