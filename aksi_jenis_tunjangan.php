<?php 
include 'koneksi.php';
$nama_jenis_tunjangan = $_POST['nama_jenis_tunjangan'];




mysql_query("INSERT INTO jenis_tunjangan VALUES('','$nama_jenis_tunjangan')");

header("location:jenis_tunjangan.php");
?>
