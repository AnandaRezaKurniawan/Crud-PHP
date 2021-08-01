<html>
	<head> <title> Tambah Penumpang </title> </head>
		<body>
		<div class="crud">
		<center>
			<h1><font face = "arial">Tambah Penumpang</font></h1>
			<form action = "?page=simpan" method="POST">
			<link rel="stylesheet" type="text/css" href="style_1.css">
				<table border="0" cellpadding ="10">
				<tr>
					<td>Id Penumpang</td>
					<td><input type = "text" name="id_penumpang"></td>
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
					<td><input type = "text" name="nama_penumpang"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat_penumpang" rows = "3" cols ="22"></textarea></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type = "date" name="tanggal_lahir"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
					<input type="radio" name="jenis_kelamin" size="30" required value="Laki-Laki">Laki-Laki
					<input type="radio" name="jenis_kelamin" size="30" required value="Perempuan">Perempuan
					</td>
				</tr>
				<tr>
					<td> No Telp</td>
					<td><input type = "text" name="telephone"></td>
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