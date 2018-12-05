<!DOCTYPE html>
<html>
<head>
	<title>Input Data Tunjangan Jabatan</title>
	<style>
.tengah{
position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;height: 320px;background:linear-gradient(#ffffff, #fff8dc, #FFFAFA);
}
</style>
</head>
<IMG SRC = "investor.jpg">
<body><div align="center" class="tengah"><p align="center"><font face="verdana" size="4" color="black"></font></p>
	<a href="index.php">Lihat Semua Data Tunjangan Jabatan</a>
	<br/>
	<h3>Input Data Tamu Tunjangan Jabatan</h3>
	<form action="proses_input.php" method="post">		
		<table>
			<tr>
				<td>Nama Karyawan</td>
                <td><select name="idkaryawan" id="idkaryawan" class="validate[required]">
                    <?php
                    $tampil = mysql_query("SELECT * FROM datakaryawan ORDER BY nama");
                    if ($r['idkaryawan'] == 0) {
                        echo "<option value='' selected>- Pilih Karyawan -</option>";
                    }

                    while ($w = mysql_fetch_array($tampil)) {
                        echo "<option value=$w[nip]> $w[nama_karyawan]</option>";
                    }
                    ?>
                </select>
            </tr>
			<tr>
				<td>Jenis Tunjangan</td>
				  <td><select name="id_jenis_tunjangan" id="id_jenis_tunjangan" class="validate[required]">
                    <?php
                    $tampil2 = mysql_query("SELECT * FROM jenis_tunjangan ORDER BY nama_jenis_tunjangan");
                    if ($r['id_jenis_tunjangan'] == 0) {
                        echo "<option value='' selected>- Pilih Jenis Tunjangan -</option>";
                    }

                    while ($w2 = mysql_fetch_array($tampil2)) {
                        echo "<option value=$w2[id_jenis_tunjangan]> $w2[nama_jenis_tunjangan]</option>";
                    }
                    ?>
                </select>
            </tr>
			<tr>
			<td><div class="field-group"></td>
            <td><label for="required">Besar Tunjangan:</label>
            <div class="field">
                <input type="text" name="besar_tunjangan" id="besar_tunjangan" size="20" class="validate[required]  formatCurrency" />
            </div>
			</td>
        </div>
		</tr>
		<tr>
		
        <div class="actions">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" onclick="self.history.back()" class="btn btn-error">Batal</button>
        </div> <!-- .actions -->
		</tr>
			
		</table>
	</form>
	</div>
</body>
</html>