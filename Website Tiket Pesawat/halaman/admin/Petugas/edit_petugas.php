<html>
	<head>
	<title>Silahkan Edit</title>
	</head>
	<body>
		<center>
			<h3>Edit Data</h3>
			<?php
				include "koneksi.php";
				$id_petugas = $_GET['id_petugas'];
				$data = mysql_query("SELECT *FROM petugas where id_petugas='$id_petugas' ")or die (mysql_error());
				while($d = mysql_fetch_array($data)){
			?>
			<form action="?page=update_petugas" method="POST" enctype="multipart/form-data">
				<table>
					<tr hidden>
						<td>Id Petugas</td>
						<td><input type="text" name="id_petugas"  value="<?php echo $d['id_petugas']; ?>"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
					<td><input type="password" name="password" value="<?php echo $d['password']; ?>"></td>
					</tr>
					<tr>
						<td>Nama Petugas</td>
						<td><input type="text" name="nama_petugas" value="<?php echo $d['nama_petugas']; ?>"></td>
					</tr>
					<tr>
						<td>Id Level</td>
						<td><input type="text" name="id_level" value="<?php echo $d['id_level']; ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="edit" value="edit"></td>

					</tr>
				</table>
		</center>
		</form>
	</body>
</html>
<?php
		}
		?>