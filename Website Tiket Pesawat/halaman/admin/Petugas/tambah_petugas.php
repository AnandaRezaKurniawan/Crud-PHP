<html>
	<head> <title> Tambah Petugas </title> </head>
		<body>
		<div class="crud">
		<center>
			<h1><font face = "arial">Tambah Petugas</font></h1>
			<form action = "?page=simpan_petugas" method="POST">
			<link rel="stylesheet" type="text/css" href="style_1.css">
				<table border="0" cellpadding ="10">
				<tr>
					<td>Id Petugas</td>
					<td><input type = "text" name="id_petugas"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type = "text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type = "password" name="password"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type = "text" name="nama_petugas"></td>
				</tr>
				<tr>
					<td>Id Level</td>
					<td><input type="text" name="id_level" rows = "3" cols ="22"></textarea></td>
				</tr>
	
					<tr align = "center" class="aksi">
						<td><input type="submit" name ="tambah" value="tambah"></td>
						<td><input type="reset" name ="reset" value="reset"></td>
					</tr>
</table> 
</form>
</center>
</div>
</body>
</html>