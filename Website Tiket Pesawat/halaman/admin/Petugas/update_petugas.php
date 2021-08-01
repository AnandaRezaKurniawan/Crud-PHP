<?php
require '../koneksi.php';
	$id_petugas 		= $_POST['id_petugas'];
	$username 			= $_POST['username'];
	$password 			= $_POST['password'];
	$nama_petugas	 	= $_POST['nama_petugas'];
	$id_level		 	= $_POST['id_level'];
	

	mysql_query("UPDATE petugas SET username='$username',password='$password',nama_petugas='$nama_petugas',id_level='$id_level' where id_petugas='$id_petugas' ");
	header("location:?page=petugas");
?>
