<?php
require"koneksi.php";
$aaa1 = $_POST ['id_pemesanan'];
$bbb1 = $_POST ['kode_pemesanan'];
$ccc1 = $_POST ['tanggal_pemesanan'];
$ddd1 = $_POST ['tempat_pemesanan'];
$eee1 = $_POST ['id_pelanggan'];
$fff1 = $_POST ['kode_kursi'];
$ggg1 = $_POST ['id_rute'];
$hhh1 = $_POST ['tujuan'];
$iii1 = $_POST ['tanggal_berangkat'];
$jjj1 = $_POST ['jam_cekin'];
$kkk1 = $_POST ['jam_berangkat'];
$lll1 = $_POST ['total_bayar'];
$mmm1 = $_POST ['id_petugas'];

$query = mysql_query("INSERT INTO pemesanan(id_pemesanan,kode_pemesanan,tanggal_pemesanan,tempat_pemesanan,id_pelanggan,kode_kursi,id_rute,tujuan,tanggal_berangkat,jam_cekin,jam_berangkat,total_bayar,id_petugas)
						VALUES('$aaa1','$bbb1','$ccc1','$ddd1','$eee1','$fff1','$ggg1','$hhh1','$iii1','$jjj1','$kkk1','$lll1','$mmm1')");
if ($query)
{
	?>
	<script>
	alert('berhasil ditambahkan');
	document.location='?page=pemesanan'
	</script>
	<?php
}
else
{echo "terjadi kesalahan";}
?>







