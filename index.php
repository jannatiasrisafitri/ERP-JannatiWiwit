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
	<a href="datakaryawan.php">Tambah Data Baru</a>
	<h3>DATA KARYAWAN</h3>
	<table border="1" class="table">
		<tr>
			<th>NO</th>
			<th>Id Karyawan</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Agama</th>
			<th>No Telpon</th>
			<th>Opsi</th>		
		</tr>

		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM datakaryawan")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['idkaryawan']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['agama']; ?></td>
				<td><?php echo $data['telp']; ?></td>
				
				<td>
				<a class="edit" href="edit.php?id=<?php echo $data['idkaryawan']; ?>">Edit</a>
				<a class="hapus" href="proses_hapus.php?id=<?php echo $data['idkaryawan']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	
</body>
</html>