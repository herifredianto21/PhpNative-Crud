<?php
	include('conn.php');
	if(isset($_POST['add'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];

		mysqli_query($conn,"insert into `user` (nim, nama) values ('$nim', '$nama')");
	}
?>