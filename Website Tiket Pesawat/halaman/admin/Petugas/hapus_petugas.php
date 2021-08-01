<?php
include ("koneksi.php");
$id_petugas=$_GET['id_petugas'];
mysql_query("DELETE FROM petugas WHERE id_petugas='$id_petugas'")or die(mysql_error());
header("location:?page=petugas");
?>