<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
	<base href="<?= base_url() ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body onload="print()">
	<center>
		<table>
			<tr>
				<td>
					<img src="gambar/logo.png" style="width: 100px; height: 100px;">
				</td>
				<td>
					<center>
						<h3>PT. Sinar Metrindo Perkasa (SIMETRI)</h3>
					<h5>Rukan Aries Niaga Blok A1 No 3A dan 3B Jl. Taman Aries no telp (021) 58906959, faks  (021) 58907350.</h5>
					</center>
				</td>
			</tr>
		</table>
		<h4>LAPORAN DATA KARYAWAN</h4>
	</center>
	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nik</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Pendidikan</th>
				<th>Asal Sekolah</th>
				<th>Jabatan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($query->result() as $row) {
			 ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $row->nik; ?></td>
				<td><?= $row->nama; ?></td>
				<td><?= $row->alamat; ?></td>
				<td><?= $row->jenis_kelamin; ?></td>
				<td><?= $row->agama; ?></td>
				<td><?= $row->pendidikan; ?></td>
				<td><?= $row->asal_sekolah; ?></td>
				<td><?= $row->pekerjaan; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>
