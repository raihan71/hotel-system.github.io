<?php 
session_start();
include '../config/koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from admin where username='$username' and password='$password'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['username']=$username;
	echo "<script>alert('Jangan lupa logout, karena Anda masuk ke halaman administrator!'); window.location = 'media.php?modul=home'</script>";
}else{
	echo"<script>alert('Username atau password yang anda masukan salah. Silahkan untuk mencoba kembali!'); window.location= 'index.php'</script>";
	// mysql_error();
}
// echo $pas;
 ?>