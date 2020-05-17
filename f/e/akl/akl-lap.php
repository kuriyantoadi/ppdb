<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php
      // $waktu=date('d-m-Y H:i:s');
      $cetak="AKL_Data_PPDB_SMK_N_1_Kragilan";
      header("Content-type: application/vnd-ms-excel");
      header("Content-Disposition: attachment; filename=$cetak.xls");
    ?>
</head>
<body>

	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			margin: 20px auto;
			border-collapse: collapse;
		}
		table td,
		table td{
			border: 1px solid #3c3c3c;
			padding: 3px 8px;
		}
		a{
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
		</style>



	<table border="0 ">
		<tr>
			<th>No</th>
			<th>id</th>
			<th>Nomor Peserta</th>
			<th>Tanggal Pendaftaran</th>
			<th>Kompetensi Keahlian</th>
			<th>Asal Sekolah</th>
			<th>NPSN Sekolah</th>
			<th>NISN</th>
			<th>Nama Siswa</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>tahun Lulus</th>
			<th>Nomor HP</th>
			<th>NIK</th>
			<th>NO KK</th>
			<th>Tgl KK</th>
			<th>Kota</th>
			<th>Kecamatan</th>
			<th>Keluarahan</th>
			<th>Kode Pos</th>
			<th>Alamat</th>
			<th>RT</th>
			<th>RW</th>
			<th>Jarak Ke Sekolah</th>
			<th>Nama Orang Tua</th>
			<th>Pekerjaan Orang Tua</th>
			<th>KIP</th>
			<th>PDF SKHUN</th>
			<th>PDF Surat Dokter</th>
			<th>PDF KK</th>
			<th>PDF Akat</th>
			<th>PDF Photo</th>
			<th>PDF Swa Photo</th>
			<th>PDF Piagam 1</th>
			<th>PDF Piagam 2</th>
			<th>PDF Piagam 3</th>
			<th>PDF UN Bahasa Indonesia</th>
			<th>PDF UN Bahasa Inggris</th>
			<th>PDF UN MTK</th>
			<th>PDF UN IPA</th>
			<th>Kondisi</th>
			<th>Username</th>
			<th>Password</th>
			<th>Enkripsi</th>
			<th>Bertindik</th>
			<th>Perokok</th>
			<th>Psikotropika</th>
			<th>Bertato</th>
			<th>Peminum</th>

		</tr>
		<?php
        include '../../../koneksi.php';
        $no = 1;
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
		no_hp,
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
		kondisi,
		username,
		password,
		enk,
		bertindik,
		perokok,
		psikotropika,
		bertato,
		peminum
		from f_siswa_akl");
        while ($d = mysqli_fetch_array($data)) {
            ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['no_p']; ?></td>
				<td><?php echo $d['tgl_pendaftaran']; ?></td>
				<td><?php echo $d['kompetensi_keahlian']; ?></td>
				<td><?php echo $d['asal_sekolah']; ?></td>
				<td><?php echo $d['npsn_sekolah']; ?></td>
				<td><?php echo $d['nisn']; ?></td>
				<td><?php echo $d['nama_siswa']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['tempat_lahir']; ?></td>
				<td><?php echo $d['tgl_lahir']; ?></td>
				<td><?php echo $d['tahun_lulus']; ?></td>
				<td><?php echo $d['no_p']; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['no_kk']; ?></td>
				<td><?php echo $d['tgl_kk']; ?></td>
				<td><?php echo $d['kota']; ?></td>
				<td><?php echo $d['kecamatan']; ?></td>
				<td><?php echo $d['kelurahan']; ?></td>
				<td><?php echo $d['kode_pos']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['rt']; ?></td>
				<td><?php echo $d['rw']; ?></td>
				<td><?php echo $d['jarak_kesekolah']; ?></td>
				<td><?php echo $d['nama_org_tua']; ?></td>
				<td><?php echo $d['pekerjaan_org_tua']; ?></td>
				<td><?php echo $d['kip']; ?></td>
				<td><?php echo $d['pdf_skhun']; ?></td>
				<td><?php echo $d['pdf_surat_dokter']; ?></td>
				<td><?php echo $d['pdf_kk']; ?></td>
				<td><?php echo $d['pdf_akta']; ?></td>
				<td><?php echo $d['pdf_photo']; ?></td>
				<td><?php echo $d['pdf_swa_kk']; ?></td>
				<td><?php echo $d['pdf_piagam1']; ?></td>
				<td><?php echo $d['pdf_piagam2']; ?></td>
				<td><?php echo $d['pdf_piagam3']; ?></td>
				<td><?php echo $d['un_bind']; ?></td>
				<td><?php echo $d['un_bing']; ?></td>
				<td><?php echo $d['un_mtk']; ?></td>
				<td><?php echo $d['un_ipa']; ?></td>
				<td><?php echo $d['kondisi']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['enk']; ?></td>
				<td><?php echo $d['bertindik']; ?></td>
				<td><?php echo $d['perokok']; ?></td>
				<td><?php echo $d['psikotropika']; ?></td>
				<td><?php echo $d['bertato']; ?></td>
				<td><?php echo $d['peminum']; ?></td>

			</tr>
			<?php
        }
        ?>

		</table>
</body>
</html>
