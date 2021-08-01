<?php
include ("koneksi.php");
$id_transportasi=$_GET['id_transportasi'];
mysql_query("DELETE FROM transportasi WHERE id_transportasi='$id_transportasi'")or die(mysql_error());
header("location:?page=transportasi");
?>