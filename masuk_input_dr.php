<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
<style>
.tengah{
position: absolute;margin-top: -100px;margin-left: -200px;left: 20%;top: 50%;width: 1200px;height: 300px;background:linear-gradient(#ffffff, #fff8dc, #FFFAFA);
}
</style>
</head>
<IMG SRC = "desain.jpg">
<body>
	<div align="center" class="tengah"><p align="center"><font face="verdana" size="4" color="black"></font></p>
	<center><a href="home.php">HOME</a></center>
	<a href="datarekrutment.php">Tambah Data Baru</a>
	<h3>DATA REKRUTMEN</h3>
	<table border="1" class="table">
		<tr>
			<th>NO</th>
			<th>Id Rekrutment</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No Telpon</th>
			<th>Opsi</th>		
		</tr>

		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM datarekrutmen")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['id_rekrutment']; ?></td>
				<td><?php echo $data['nama_peserta']; ?></td>
				<td><?php echo $data['alamat_peserta']; ?></td>
				<td><?php echo $data['email_peserta']; ?></td>
				<td><?php echo $data['notelp_peserta']; ?></td>	
				<td>
				<a class="edit" href="edit_dr.php?id=<?php echo $data['id_rekrutment']; ?>">Edit</a>
				<a class="hapus" href="proses_hapus_dr.php?id=<?php echo $data['id_rekrutment']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>