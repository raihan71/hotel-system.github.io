<?php
include"../config/koneksi.php";

if (!isset($_FILES['img']['tmp_name'])) {
	echo "<script>alert('Foto Kosong!'); window.location = 'media.php?modul=room'</script>";
}else{
	$file=$_FILES['img']['tmp_name'];
	$img= addslashes(file_get_contents($_FILES['img']['tmp_name']));
	$img_name= addslashes($_FILES['img']['name']);
	$img_size = getimagesize($_FILES['img']['tmp_name']);

	if ($img_size==FALSE) {
		echo "<script>alert('Foto tidak tidak didukung'); window.location = 'media.php?modul=category'</script>";

	}else{

		move_uploaded_file($_FILES['img']['tmp_name'],"../images/room/". $_FILES["img"]["name"]);

		$location=$_FILES["img"]["name"];
		$kode_room=$_POST['kode_room'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$ready=$_POST['ready'];

		$update=mysql_query("INSERT INTO room (img, kode_room, description, price, category, ready) VALUES ('$location','$kode_room','$description','$price','$category','$ready')");
		$_SESSION['pesan'] = 'Berhasil Ditambah';
    	echo '<script>window.location="media.php?modul=room"</script>';
	}
}

?>	