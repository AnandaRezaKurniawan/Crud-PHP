<?php
include ("koneksi.php");
$aa1 = $_POST['id_penumpang'];
$aa2 = $_POST['username'];
$aa3 = $_POST['password'];
$aa4 = $_POST['nama_penumpang'];
$aa5 = $_POST['alamat_penumpang'];
$aa6 = $_POST['tanggal_lahir'];
$aa7 = $_POST['jenis_kelamin'];
$aa8 = $_POST['telephone'];

$query = mysql_query("insert into penumpang values ('$aa1','$aa2','$aa3','$aa4','$aa5','$aa6','$aa7','$aa8')");
if($query)
{
?>
<script language ="JavaScript">
alert('Data Penumpang Berhasil Ditambahkan');
document.location='?page=penumpang';
</script>
<?php
}
else
{ echo "Terjadi Kesalahan"; }
?>