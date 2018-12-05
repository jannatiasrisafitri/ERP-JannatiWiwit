<?php 
include 'koneksi.php';
$idkaryawan = $_POST['idkaryawan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$agama= $_POST['agama'];
$telp = $_POST['telp'];


mysql_query("UPDATE datakaryawan SET nama='$nama', alamat='$alamat', email='$email', agama='$agama', telp='$telp' WHERE idkaryawan='$idkaryawan'");

header("location:index.php?pesan=UPDATE");
?>