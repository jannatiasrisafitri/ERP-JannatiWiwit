<!DOCTYPE html>
<html>
<head>
	<title>Input Data Karyawan</title>
	<style>
.tengah{
position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;height: 320px;background:linear-gradient(#ffffff, #fff8dc, #FFFAFA);
}
</style>
</head>
<IMG SRC = "investor.jpg">
<body><div align="center" class="tengah"><p align="center"><font face="verdana" size="4" color="black"></font></p>
	<a href="index.php">Lihat Semua Data Karyawan</a>
	<br/>
	<h3>Input Data Karyawan</h3>
	<form action="proses_input.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>						
			</tr>
			<tr>
				<td>Agama</td>
                <td><select name="agama">
                    <option value="" selected>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select></td>
            </tr>

			<tr>
				<td>Nomor Telpon</td>
				<td><input type="text" name="telp"></td>					
			</tr>
			
			
			<tr>
				<td><input type="submit" name="Submit" value="Simpan"></td>
			</div>		
			</tr>

		</table>
	</form>
	</div>
</body>
</html>