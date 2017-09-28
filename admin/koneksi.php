<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "yanamath";

mysql_connect($server,$user,$password) or die ("Koneksi gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");
?>
