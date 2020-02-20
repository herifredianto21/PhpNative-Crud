<?php
	include('conn.php');
	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];

		mysqli_query($conn,"update `user` set nim='$nim', nama='$nama' where userid='$id'");
	}
?>