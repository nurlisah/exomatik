<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
</head>
<body>
	<div style="margin-bottom: 55px">
		<img style="margin-left: 30px;margin-top: -40px" width="250px" src="<?php echo base_url().'/image/log.jpeg'?>">
		<h3 style="text-align: center; margin-top: -170px;margin-left: 300px">BADAN PENGURUS ORGANISASI<br>EXPLORASI SOLIDARITAS MAHASISWA<br>TEHNIK INFORMATIKA<br>(BPO EXOMATIK)<br>UIN ALAUDDIN MAKASSAR</h3>
	</div>
	<hr>
	<center>
		<h3>FORMULIR PENDAFTARAN CALON ANGGOTA BARU<br>ANGKATAN KE-XII PERIODE 2017-2018</h3>
	</center>
	<?php
	foreach ($daftar as $lisa) { ?>	
	<table cellpadding="10">
		<tr>
			<td>No. Pendaftaran</td>
			<td>:</td>
			<td><?php echo $lisa->id_pendaftaran; ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $lisa->nama_lengkap; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $lisa->jk; ?></td>
		</tr>
		<tr>
			<td>Tempat Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $lisa->tempat_lahir; ?>,<?php echo $lisa->tgl_lahir; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $lisa->alamat; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $lisa->email; ?></td>
		</tr>
		<tr>
			<td>No. Handphone</td>
			<td>:</td>
			<td><?php echo $lisa->no_hp; ?></td>
		</tr>
		<tr>
			<td>Pengalaman Organisasi</td>
			<td>:</td>
			<td><?php echo $lisa->po; ?></td>
		</tr>
		<tr>
			<td>Alasan & Tujuan Masuk</td>
			<td>:</td>
			<td><?php echo $lisa->alasan; ?></td>
		</tr>
		<tr>
			<td>foto</td>
			<td>:</td>
			<td>
           	 <img src="<?php echo base_url('image/gambar_pendaftar/'.$lisa->foto_profil); ?>" width="150px" height="200px">
        	</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
        	<td>
        		<span>Samata,............2018</span>
        		<br>Tanda Tangan
        		<br><br>
        		<br>.......................<br>

        	</td>
		</tr>
		

	</table>
	<?php } ?>
</body>
</html>
