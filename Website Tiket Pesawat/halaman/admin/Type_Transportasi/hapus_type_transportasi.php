<?php
include ("koneksi.php");
$id_type_transportasi=$_GET['id_type_transportasi'];
mysql_query("DELETE FROM type_transportasi WHERE id_type_transportasi='$id_type_transportasi'")or die(mysql_error());
header("location:?page=hapus_type_transportasi");
?>