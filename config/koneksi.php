<?php
ob_start("ob_gzhandler");
$host="mysql.hostinger.co.id";
$user="u219495212_alham";
$pass="ray123";
$db="u219495212_alhma";

$konek=mysql_connect($host, $user, $pass);
$select=mysql_select_db($db, $konek);
if ($select) {
	
}else{
	mysql_error();
}
?>