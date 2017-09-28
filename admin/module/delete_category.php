<?php
include"../config/koneksi.php";
$id=$_GET['id'];
$query=mysql_query("delete from category where id='$id'");

if ($query) {
	$_SESSION['pesan'] = 'Berhasil Dihapus';
	echo "<script>window.location='media.php?modul=category'</script>";
}else{
	mysql_error();
	header("location:media.php?modul=category");
}
?>