<?php
include ("koneksi.php");
$id_penumpang=$_GET['id_penumpang'];
mysql_query("DELETE FROM penumpang WHERE id_penumpang='$id_penumpang'")or die(mysql_error());
header("location:?page=penumpang");
?>