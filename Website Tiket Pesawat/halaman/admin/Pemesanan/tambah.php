	<?php
include ('../koneksi.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Pemesanan</title>
</head>
<body>
<div class="crud">
	<form action="?page=simpan_pemesanan" method="post" enctype="multipart/from-data">
	<link rel="stylesheet" type="text/css" href="style_1.css">
	<center><h3>INPUT DATA PEMESANAN</h3></center>
	<table align="center">

	<tr>
		<td>ID Pemesanan</td>
		<td>:</td>
		<td><input type="text" name="id_pemesanan"></td>
	</tr>
	<tr>
		<td>Kode Pemesanan</td>
		<td>:</td>
		<td><input type="text" name="kode_pemesanan"></td>
	</tr>
	<tr>
		<td>Tanggal Pemesanan</td>
		<td>:</td>
		<td><input type="date" name="tanggal_pemesanan"></td>
	</tr>
	<tr>
		<td>Tempat Pemesanan</td>
		<td>:</td>
		<td><input type="text" name="tempat_pemesanan"></td>
	</tr>
	<tr>
		<td>Id Pelanggan</td>
		<td>:</td>
		<td>


		<select name="id_pelanggan">
			<option>Pilih</option>
			<?php
include'../koneksi.php';
$query=mysql_query("SELECT * FROM penumpang");
while ($data=mysql_fetch_array($query)){
	echo'<option value="'.$data['id_penumpang'].'">'.$data['nama_penumpang'].'</option>';
}
			?>


		</select>
		</td>
	</tr>
	<tr>
		<td>Kode Kursi</td>
<td>:</td>
		<td><input type="text" name="kode_kursi"></td>
	</tr>
	<tr>
		<td>Id Rute</td>
<td>:</td>
		<td><select name="id_rute">
			
			<?php
include'../koneksi.php';
$query=mysql_query("SELECT * FROM rute");
while ($data=mysql_fetch_array($query)){
	echo'<option value="'.$data['id_rute'].'">'.$data['id_rute'].'</option>';
}
			?>

		</select></td>
	</tr>
	<tr>
		<td>Tujuan</td>
<td>:</td>
		<td><input type="text" name="tujuan"></td>
	</tr>
	<tr>
		<td>Tgl Berangkat</td>
		<td>:</td>
		<td><input type="date" name="tanggal_berangkat"></td>
	</tr>
	<tr>
		<td>Jam Cekin</td>
<td>:</td>
		<td><input type="time" name="jam_cekin"></td>
	</tr>
	<tr>
		<td>Jam Berangkat</td>
<td>:</td>
		<td><input type="time" name="jam_berangkat"></td>
	</tr>
	<tr>
		<td>Total Bayar</td>
<td>:</td>
		<td><input type="text" name="total_bayar"></td>
	</tr>
	<tr>
		<td>Id Petugas</td>
		<td>:</td>
		<td><select name="id_petugas">
			
			<?php
include'../koneksi.php';
$query=mysql_query("SELECT * FROM petugas");
while ($data=mysql_fetch_array($query)){
	echo'<option value="'.$data['id_petugas'].'">'.$data['id_petugas'].'</option>';
}
			?>

		</select></td>
	</tr>
	<tr>
		<td colspan="3" class="aksi">
			<input type="submit" value="Simpan" name="submit">
			<input type="reset" name="Reset" value="batal">
		</td>
	</tr>
	</table>
</form>
</div>
</body>
</html>