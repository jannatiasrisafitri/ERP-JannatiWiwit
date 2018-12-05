
<?php 
include 'koneksi.php';
$nama_peserta = $_POST['nama_peserta'];
$alamat_peserta = $_POST['alamat_peserta'];
$email_peserta = $_POST['email_peserta'];
$notelp_peserta = $_POST['notelp_peserta'];



mysql_query("INSERT INTO datarekrutmen VALUES('','$nama_peserta','$alamat_peserta','$email_peserta','$notelp_peserta')");

header("location:masuk_input_dr.php");
?>
