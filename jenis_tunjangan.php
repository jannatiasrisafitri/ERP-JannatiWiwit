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
<body><div align="center" class="tengah"><p align="center"><font face="verdana" size="4" color="black"></font></p>
    <center><a href="home.php">HOME</a></center>
    <a href="tambah_jenis_tunjangan.php">Tambah Data Baru</a>
    <h3>Jenis Tunjangan</h3>
    <table border="1" class="table">
        <tr>
            <th>NO</th>
            <th>id jenis tunjangan</th>
            <th>Nama Jenis Tunjangan</th>
             
        </tr>
        <?php 
        include "koneksi.php";
        $query_mysql = mysql_query("SELECT * FROM jenis_tunjangan")or die(mysql_error());
        $nomor = 1;
        while($data = mysql_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id_jenis_tunjangan']; ?></td>
                <td><?php echo $data['nama_jenis_tunjangan']; ?></td>
               
                
                <td>
                <a class="edit" href="edit.php?id=<?php echo $data['id_jenis_tunjangan']; ?>">Edit</a>
                <a class="hapus" href="proses_hapus.php?id=<?php echo $data['id_jenis_tunjangan']; ?>">Hapus</a>                    
            </td>
        </tr>
        <?php } ?>
    </table>
	<br><tr><td colspan="2" align="center">Apakah Ingin Menambahkan Tunjangan Jabatan? <a href="tambah_tunjangan_jabatan.php"><b>Tambah</b></a></td></tr>
</body>
