<?php
include ("koneksi.php");
$aa1 = $_POST['id_petugas'];
$aa2 = $_POST['username'];
$aa3 = $_POST['password'];
$aa4 = $_POST['nama_petugas'];
$aa5 = $_POST['id_level'];


$query = mysql_query("insert into petugas values ('$aa1','$aa2','$aa3','$aa4','$aa5')");
if($query)
{
?>
<script language ="JavaScript">
alert('Data Petugas Berhasil Ditambahkan');
document.location='?page=petugas';
</script>
<?php
}
else
{ echo "Terjadi Kesalahan"; }
?>