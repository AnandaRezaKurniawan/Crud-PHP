<?php
require 'koneksi.php';
	$id_pemesanan = $_POST['id_pemesanan'];
	$kode_pemesanan = $_POST['kode_pemesanan'];
	$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
	$tempat_pemesanan = $_POST['tempat_pemesanan'];
	$id_pelanggan = $_POST['id_pelanggan'];
	$kode_kursi = $_POST['kode_kursi'];
	$id_rute = $_POST['id_rute'];
	$tujuan = $_POST['tujuan'];
	$tanggal_berangkat = $_POST['tanggal_berangkat'];
	$jam_cekin = $_POST['jam_cekin'];
	$jam_berangkat = $_POST['jam_berangkat'];
	$total_bayar = $_POST['total_bayar'];
	$id_petugas = $_POST['id_petugas'];


	mysql_query("UPDATE pemesanan SET id_pemesanan='$id_pemesanan',kode_pemesanan='$kode_pemesanan',tanggal_pemesanan='$tanggal_pemesanan',tempat_pemesanan='$tempat_pemesanan',id_pelanggan='$id_pelanggan',kode_kursi='$kode_kursi',id_rute='$id_rute',tujuan='$tujuan',tanggal_berangkat='$tanggal_berangkat',jam_cekin='$jam_cekin',jam_berangkat='$jam_berangkat',total_bayar='$total_bayar',id_petugas='$id_petugas' WHERE id_pemesanan='$id_pemesanan' ");
	header("location:?page=pemesanan");
?>
