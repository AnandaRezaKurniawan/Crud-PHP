<?php
include ("koneksi.php");
$aa1 = $_POST['id_rute'];
$aa2 = $_POST['tujuan'];
$aa3 = $_POST['rute_awal'];
$aa4 = $_POST['rute_akhir'];
$aa5 = $_POST['harga'];
$aa6 = $_POST['id_transportasi'];


$query = mysql_query("insert into rute values ('$aa1','$aa2','$aa3','$aa4','$aa5','$aa6')");
if($query)
{
?>
<script language ="JavaScript">
alert('Data Penumpang Berhasil Ditambahkan');
document.location='?page=rute';
</script>
<?php
}
else
{ echo "Terjadi Kesalahan"; }
?>