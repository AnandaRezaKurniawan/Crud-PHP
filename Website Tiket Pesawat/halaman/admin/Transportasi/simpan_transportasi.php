<?php
include ("koneksi.php");
$aa1 = $_POST['id_transportasi'];
$aa2 = $_POST['kode'];
$aa3 = $_POST['jumlah_kursi'];
$aa4 = $_POST['keterangan'];
$aa5 = $_POST['id_type_transportasi'];

$query = mysql_query("insert into transportasi values ('$aa1','$aa2','$aa3','$aa4','$aa5')");
if($query)
{
?>
<script language ="JavaScript">
alert('Data  Transportasi Berhasil Ditambahkan');
document.location='?page=transportasi';
</script>
<?php
}
else
{ echo "Terjadi Kesalahan"; }
?>