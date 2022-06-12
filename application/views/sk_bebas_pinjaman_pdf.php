<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<br>
		<img src="<?=base_url()?>assets/img/polinema-loss.png" style="width: 80px; margin-left: 3%;">
		<img src="<?=base_url()?>assets/img/kan-logo.jpg" style="width: 85px; margin-left: 71%;">
		<div class="col-8 text-center" style="margin-top: -90px; margin-left: 100px;">
			<span style="font-family: serif; color: black;">
				<strong>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN <br> POLITEKNIK NEGERI MALANG </strong> <br> Jalan Soekarno-Hatta No.9 Malang 65141 <br>
				Telp (0341) 404424-404425 Fax (0341) 404420
			</span>
		</div>
	</div>
	<hr style="border-top: 2px solid black;">
	<div class="row" style="margin-left: 5px;">
		<span style="font-family: serif; color: black; font-weight: bold; font-size: 20px;">
			<center>
				<?= $title; ?>
			</center>
		</span>
		<br>
		<div class="row">
			<div class="col-md-4">
				<table style="color: black; text-align: left; font-family: serif;">
					<?php foreach ($data_pengguna as $pengguna): ?>
					<tr>
						<td>Nama</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
						<td><?= $pengguna->nama_pengguna ?></td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
						<td><?= $pengguna->kode_pengguna ?></td>
					</tr>
					<tr>
						<td>Program Studi</td>
						<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
						<td><?= $pengguna->username_pengguna ?></td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
		<br>
		<span style="font-family: serif; color: black; font-size: 15px;">
			Dengan ini menyatakan bahwa mahasiswa dengan data diri tersebut dinyatakan telah terbebas dari tanggungan peminjaman
			alat dan komponen pada Laboratorium Gedung AI Politeknik Negeri Malang. 
			<br>
			Demikian Surat Pernyataan ini dibuat untuk dapat digunakan sebagaimana mestinya. 
		</span>
</div>
<br><br>
<span style="font-family: serif; color: black; font-size: 15px; margin-left: 70%;">
	Mengetahui,
</span>
<br>
<span style="font-family: serif; color: black; font-size: 15px; margin-left: 70%;">
	Kepala Laboratorium,
</span>
<br><br><br><br>
<span style="font-family: serif; color: black; font-size: 15px; margin-left: 70%;">
	Lorem Ipsum, S.H., M.Hum,
</span>
<script src="<?= base_url('sb-admin') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('sb-admin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('sb-admin') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('sb-admin') ?>/js/sb-admin-2.min.js"></script>
</body>
</html>