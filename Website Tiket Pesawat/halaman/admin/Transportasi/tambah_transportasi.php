<html>
	<head> <title> Tambah Transportasi </title> </head>
		<body>
		<div class="crud">
		<center>
			<h1><font face = "arial">Tambah Transportasi</font></h1>
			<form action = "?page=simpan_transportasi" method="POST">
			<link rel="stylesheet" type="text/css" href="style_1.css">
				<table border="0" cellpadding ="10">
				<tr>
					<td>Id Transportasi</td>
					<td><input type = "text" name="id_transportasi"></td>
				</tr>
				<tr>
					<td>Kode</td>
					<td><input type = "text" name="kode"></td>
				</tr>
				<tr>
					<td>Jumlah Kursi</td>
					<td><input type = "text" name="jumlah_kursi"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type = "text" name="keterangan"></td>
				</tr>
				<tr>
					<td>Id Type Transportasi</td>
					<td><select name="id_type_transportasi">
						
							<?php
include'../koneksi.php';
$query=mysql_query("SELECT * FROM type_transportasi");
while ($data=mysql_fetch_array($query)){
	echo'<option value="'.$data['id_type_transportasi'].'">'.$data['id_type_transportasi'].'</option>';
}
			?>

					</select></td>
				</tr>
					<tr align = "center" class="aksi">
						<td><input type="submit" name ="tambah" value="tambah"></td>
						<td><input type="reset" name ="reset" value="reset"></td>
					</tr>
</table>
</form>
</center>
</div>
</body></html>