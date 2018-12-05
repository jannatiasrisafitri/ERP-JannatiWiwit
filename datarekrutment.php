<!DOCTYPE html>
<html>
<head>
	<title>Input Data Rekrutment</title>
	<style>
.tengah{
position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;height: 320px;background:linear-gradient(#ffffff, #fff8dc, #FFFAFA);
}
</style>
</head>
<IMG SRC = "book.jpg">
<body><div align="center" class="tengah"><p align="center"><font face="verdana" size="4" color="black"></font></p>
	<a href="masuk_input_dr.php">Lihat Semua Data Rekrutment</a>
	<br/>
	<h3>Input Data Rekrutment</h3>
	<form action="proses_input_dr.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_peserta"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_peserta"></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email_peserta"></td>					
			</tr>
			
			<tr>
				<td>Nomor Telpon</td>
				<td><input type="text" name="notelp_peserta"></td>					
			</tr>
			
			
			<tr>
			
				<td><input type="submit" name="Submit" value="Simpan" /></td>
			</div>		
			</tr>
		</table>
	</form>
	</div>
</body>
</html>