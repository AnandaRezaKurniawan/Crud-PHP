<?php
include 'koneksi.php';
	$id_penumpang = $_POST['id_penumpang'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama_penumpang = $_POST['nama_penumpang'];
	$alamat_penumpang = $_POST['alamat_penumpang'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$telephone = $_POST['telephone'];

	$query = mysql_query("UPDATE penumpang SET username='$username',password='$password',nama_penumpang='$nama_penumpang',alamat_penumpang='$alamat_penumpang',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',telephone='$telephone' WHERE id_penumpang='$id_penumpang'");

if($query)
{
?>
<script>
alert('Data penumpang Berhasil di Edit');
document.location='?page=penumpang';
</script>
<?php
}
else
{ echo "Terjadi Kesalahan"; }
?>