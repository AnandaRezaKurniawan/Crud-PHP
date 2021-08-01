<?php
require 'koneksi.php';
	$id_transportasi = $_POST['id_transportasi'];
	$kode = $_POST['kode'];
	$jumlah_kursi = $_POST['jumlah_kursi'];
	$keterangan = $_POST['keterangan'];
	$id_type_transportasi = $_POST['id_type_transportasi'];

	mysql_query("UPDATE transportasi SET id_transportasi='$id_transportasi',kode='$kode',jumlah_kursi='$jumlah_kursi',keterangan='$keterangan',id_type_transportasi='$id_type_transportasi' WHERE id_transportasi='$id_transportasi' ");
	header("location:?page=transportasi");
?>
