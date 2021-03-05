<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
	<base href="<?= base_url();?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body onload="print()">
	<center>
		<table>
			<tr>
				<td>
					<img src="<?= base_url();?>assets/images/icon/dpt1.png" style="width: 80px; height: 80px;">
				</td>
				<td>
					<center>
					<h3>PT Dwi Pratama Teknik</h3>
					<h5>Jl Bendi Besar No. 186, Kebayoran Lama, Kebayoran Lama Utara.</h5>
					<h5>Kota Administrasi, Jakarta Selatan – Indonesia</h5>
					</center>
				</td>
			</tr>
		</table>
		<h4>GAJI KARYAWAN</h4>
	</center>
	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nik</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Gaji Pokok</th>
				<th>Tunjangan Kesehatan</th>
				<th>Tunjangan Tranportasi</th>
				<th>Tunjangan Pendidikan</th>
				<th>Tunjangan Keluarga</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($query->result() as $row) {
			 ?>
			<tr>
				<td><?= $no++;?></td>
				<td><?= $row->nik;?></td>
				<td><?= $row->nama;?></td>
				<td><?= $row->pekerjaan;?></td>
				<td><?= $row->gapok;?></td>
				<td><?= $row->tukes;?></td>
				<td><?= $row->tutra;?></td>
				<td><?= $row->tupen;?></td>
				<td><?= $row->tukel;?></td>
			</tr>
			<?php } 
			?>
		</tbody>
	</table>

</body>
</html>
