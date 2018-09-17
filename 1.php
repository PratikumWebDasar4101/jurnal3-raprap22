<?php
 
	$name = $_FILES['pict']['name'];
	$tmp = $_FILES['pict']['tmp_name'];
	$dir = "foto/";

	$uploadedStatus = move_uploaded_file($tmp, $dir.$name);
	if ($uploadedStatus) {
		echo "Upload Berhasil<br>";
		echo "<img src='$dir$name'>";	
	}else{
		echo "Upload gagal";
	 }

 ?>
