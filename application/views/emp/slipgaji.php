<!DOCTYPE html>
<html>
<head>
	<title>Slip Gaji Karyawan</title>
	<base href="<?= base_url();?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body onload="print()">

<?php 
	$query = $this->db->query("SELECT * FROM karyawan,pekerjaan where karyawan.id_pekerjaan=pekerjaan.id_pekerjaan and karyawan.nik='$nik'")->row();
?>
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
		<h4>SLIP GAJI</h4>
	</center>
	<hr>

	<table class="table">
		<tr>
			<td width="10%">Nik</td>
			<td>:</td>
			<td><?= $query->nik;?></td>
			<td width="10%">Alamat</td>
			<td>:</td>
			<td><?= $query->alamat;?></td>
			<td width="10%">Tanggal</td>
			<td>:</td>
			<td><?= $tgl; ?></td>
		</tr>
		<tr>
			<td width="10%">Nama</td>
			<td>:</td>
			<td><?= $query->nama;?></td>
			<td width="10%">Jabatan</td>
			<td>:</td>
			<td><?= $query->pekerjaan;?></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>NO</th>
				<th>KETERANGAN</th>
				<th>JUMLAH</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>1</th>
				<td>Gaji Pokok</td>
				<td>Rp. <?= number_format($query->gapok);?></td>
			</tr>
			<tr>
				<th>2</th>
				<td>Tunjangan Kesehatan</td>
				<td>Rp. <?= number_format($query->tukes);?></td>
			</tr>
			<tr>
				<th>3</th>
				<td>Tunjangan Transportasi</td>
				<td>Rp. <?= number_format($query->tutra);?></td>
			</tr>
			<tr>
				<th>4</th>
				<td>Tunjangan Pendidikan</td>
				<td>Rp. <?= number_format($query->tupen);?></td>
			</tr>
			<tr>
				<th>5</th>
				<td>Tunjangan Keluarga</td>
				<td>Rp. <?= number_format($query->tukel);?></td>
			</tr>
			<tr>
				<th colspan="2">TOTAL DITERIMA</th>
				<th>Rp. 
					<?php 
					$total = $query->gapok+$query->tukes+$query->tutra+$query->tupen+$query->tukel;
					echo number_format($total);
					?>
				</th>
			</tr>
		</tbody>
	</table>
	<p style="text-align: right;">
		Penerima,
		<br><br><br><br>
		<b><?= $query->nama;?></b>
	</p>
</body>
</html>
