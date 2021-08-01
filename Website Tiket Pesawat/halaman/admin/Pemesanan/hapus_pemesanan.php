<?php
include ("koneksi.php");
$id_pemesanan=$_GET['id_pemesanan'];
mysql_query("DELETE FROM pemesanan WHERE id_pemesanan='$id_pemesanan'")or die(mysql_error());
header("location:?page=pemesanan");
?>