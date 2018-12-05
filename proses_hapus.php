<?php 
include 'koneksi.php';
$idkaryawan = $_GET['idkaryawan'];
mysql_query("DELETE FROM datakaryawan WHERE idkaryawan='$idkaryawan'")or die(mysql_error());
header("location:index.php");
?>