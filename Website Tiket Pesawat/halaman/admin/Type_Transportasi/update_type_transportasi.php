<?php
require 'koneksi.php';
	$id_type_transportasi = $_POST['id_type_transportasi'];
	$nama_type = $_POST['nama_type'];
	$keterangan = $_POST['keterangan'];

	mysql_query("UPDATE type_transportasi SET id_type_transportasi='$id_type_transportasi',nama_type='$nama_type',keterangan='$keterangan' WHERE id_type_transportasi='$id_type_transportasi' ");
	header("location:?page=type_transportasi");
?>
