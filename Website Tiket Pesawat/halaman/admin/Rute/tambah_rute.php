<html>
	<head> <title> Tambah Rute </title> </head>
		<body>
		<div class="crud">
		<center>
			<h1><font face = "arial">Tambah Rute perjalanan</font></h1>
			<form action = "?page=simpan_rute" method="POST">
			<link rel="stylesheet" type="text/css" href="style_1.css">
				<table border="0" cellpadding ="10">
				<tr>
					<td>Id Rute</td>
					<td><input type = "text" name="id_rute"></td>
				</tr>
				<tr>
					<td>Tujuan</td>
					<td><input type = "text" name="tujuan"></td>
				</tr>
				<tr>
					<td>Rute Awal</td>
					<td><input type = "text" name="rute_awal"></td>
				</tr>
				<tr>
					<td>Rute Akhir</td>
					<td><input type = "text" name="rute_akhir"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" ></td>
				</tr>
				<tr>
					<td>Id Transportasi</td>
					<td><select name="id_transportasi">
						
							<?php
include'../koneksi.php';
$query=mysql_query("SELECT * FROM transportasi");
while ($data=mysql_fetch_array($query)){
	echo'<option value="'.$data['id_transportasi'].'">'.$data['id_transportasi'].'</option>';
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
</body></html>