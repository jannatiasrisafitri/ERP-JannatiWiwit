<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Karyawan</title>
<style>
.tengah{
position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;height: 320px;background:linear-gradient(#ffffff, #fff8dc, #FFFAFA);
}
</style>
</head>
<IMG SRC = "investor.jpg">
<body><div align="center" class="tengah"><p align="center"><font face="verdana" size="4" color="black"></font></p>

	<br/>
	<a href="index.php">Lihat Semua Data Karyawan</a>
	
	<br/>
	<h3>Edit Data Karyawan</h3>
	
	<?php
	include "koneksi.php";
	$query_mysql = mysql_query("SELECT * FROM datakaryawan")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
		?>
		<form action="proses_edit.php" method="post">		
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="idkaryawan" value="<?php echo $data['idkaryawan'] ?>">
						<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
					</td>					
				</tr>	
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>					
				</tr>
				<tr>
					<td>Agama</td>
					<td><select name="agama" value="<?php echo $data['agama'] ?>">
                    <option value="" selected>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select></td>							
				</tr>
				<tr>
					<td>No telpon</td>
					<td><input type="text" name="telp" value="<?php echo $data['telp'] ?>"></td>	

				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>					
				</tr>
				
			</table>
		</form>
		<?php } ?>
	</body>
	</html>