<?php
require 'koneksi.php';
	$id_rute		= $_POST['id_rute'];
	$tujuan 			= $_POST['tujuan'];
	$rute_awal			= $_POST['rute_awal'];
	$rute_akhir 	= $_POST['rute_akhir'];
	$harga 	= $_POST['harga'];
	$id_transportasi 		= $_POST['id_transportasi'];
	
	mysql_query("UPDATE rute SET tujuan='$tujuan',rute_awal='$rute_awal',rute_akhir='$rute_akhir',harga='$harga',id_transportasi='$id_transportasi'where id_rute='$id_rute' ");
	header("location:?page=rute");
?>
