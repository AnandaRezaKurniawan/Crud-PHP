<?php
include ("koneksi.php");
$id_rute=$_GET['id_rute'];
mysql_query("DELETE FROM rute WHERE id_rute='$id_rute'")or die(mysql_error());
header("location:?page=rute");
?>