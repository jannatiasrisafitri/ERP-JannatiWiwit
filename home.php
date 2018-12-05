<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
	background-image:url('business.jpg');
	}  
	#kotak{
	-moz-box-shadow:0px 0px 0px #aaa;
	-webkit-box-shadow:1px 1px 1px #aaa;
	box-shadow:1px 1px 1px #aaa;
	-moz-border-radius:5px;
	border-radius: 20px;
	margin-top:70px;
	background:linear-gradient(#ffffff, #a0522d, #FFFAFA);
	padding:30px;
	width: 50%;	
	overflow: hidden;
	font-family: "calibri";	
}
#kotak2{

	background:linear-gradient(#FFF5EE, #c0c0c0, #ffffff);
	padding:5px;
	margin:5px;
	overflow: hidden;
	font-family: "times new roman";
	font
	
</style>
<title>HOME</title>
<body>

<center>
  <h1>HUMAN RESOURCE </h1></center>
<center><form>		
	<img src="LOGO2.png"></form></center>
<center>
<div id="kotak">
<?php
session_start();
if(isset($_SESSION['user'])=="admin"){
echo "Anda telah masuk sebagai admin
<a href=logout.php>Logout</a>";
}
?>
<div id="kotak2"><a href="homekaryawan.php"><b>DATA KARYAWAN<b/></a></div>
<div id="kotak2"><a href="datarekrutment.php"><b>DATA REKRUTMENT<b/></a></div>
</div>
<br><tr><td colspan="2" align="center">Apakah Ingin Logout? <a href="logout.php"><b>Logout</b></a></td></tr>
</body>
</head>
</html>