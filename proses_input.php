
<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$telp = $_POST['telp'];



mysql_query("INSERT INTO datakaryawan VALUES('','$nama','$alamat','$email', '$agama', '$telp')");

header("location:index.php");
?>
