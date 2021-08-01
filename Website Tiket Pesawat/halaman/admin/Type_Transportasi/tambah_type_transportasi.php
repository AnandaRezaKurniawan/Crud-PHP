<html>
	<head> <title> Tambah Type Transportasi </title> </head>
		<body>
		<div class="crud">
		<center>
			<h1><font face = "arial">Tambah Type Transportasi</font></h1>
			<form action = "?page=simpan_type_transportasi" method="POST">
			<link rel="stylesheet" type="text/css" href="style_1.css">
				<table border="0" cellpadding ="10">
				<tr>
					<td>Id Type Transportasi</td>
					<td><input type = "text" name="id_type_transportasi"></td>
				</tr>
				<tr>
					<td>nama_type</td>
					<td><input type = "text" name="nama_type"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type = "text" name="keterangan"></td>
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