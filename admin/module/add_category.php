<?php
include"../config/koneksi.php";

if (!isset($_FILES['img']['tmp_name'])) {
	echo "<script>alert('Foto kosong!'); window.location = 'media.php?modul=category'</script>";
}else{
	$file=$_FILES['img']['tmp_name'];
	$img=addslashes(file_get_contents($_FILES['img']['tmp_name']));
	$img_name=addslashes($_FILES['img']['name']);
	$img_size=getimagesize($_FILES['img']['tmp_name']);

	if ($img_size==FALSE) {
		echo "<script>alert('Foto tidak tidak didukung'); window.location = 'media.php?modul=category'</script>";
	}else{
		move_uploaded_file($_FILES['img']['tmp_name'],"../images/category/". $_FILES['img']['name']);

		$location=$_FILES['img']['name'];
		$name_cat=$_POST['name_cat'];

		$insert=mysql_query("INSERT INTO category (img, name_cat) VALUES ('$location', '$name_cat')");
		$_SESSION['pesan'] = 'Berhasil Ditambah';
    	echo '<script>window.location="media.php?modul=category"</script>';

	}
}
?>