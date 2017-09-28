<?php
include '../config/koneksi.php';
$id=$_GET['id'];
mysql_query("delete from room where id='$id'");

$_SESSION['pesan'] = 'Berhasil dihapus';
    echo '<script>window.location="media.php?modul=room"</script>';
?>