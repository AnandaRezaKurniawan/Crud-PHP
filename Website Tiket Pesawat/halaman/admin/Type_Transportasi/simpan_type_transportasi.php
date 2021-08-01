<?php
include ("koneksi.php");
$aa1 = $_POST['id_type_transportasi'];
$aa2 = $_POST['nama_type'];
$aa3 = $_POST['keterangan'];

$query = mysql_query("insert into type_transportasi values ('$aa1','$aa2','$aa3')");
if($query)
{
?>
<script language ="JavaScript">
alert('Data Type Transportasi Berhasil Ditambahkan');
document.location='?page=type_transportasi';
</script>
<?php
}
else
{ echo "Terjadi Kesalahan"; }
?>