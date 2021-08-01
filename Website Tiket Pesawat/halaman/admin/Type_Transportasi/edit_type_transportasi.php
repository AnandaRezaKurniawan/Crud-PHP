<html>
	<head>
	<title>Silahkan Edit</title>
	</head>
	<body>
		<center>
			<h3>Edit Data</h3>
			<?php
				include "koneksi.php";
				$id_type_transportasi = $_GET['id_type_transportasi'];
				$data = mysql_query("SELECT *FROM type_transportasi where id_type_transportasi='$id_type_transportasi' ")or die (mysql_error());
				while($d = mysql_fetch_array($data)){
			?>
			<form action="?page=update_type_transportasi" method="POST" enctype="multipart/form-data">
				<table>
					<tr hidden>
						<td>Id Type Transportasi</td>
						<td><input type="text" name="id_type_transportasi" value="<?php echo $d['id_type_transportasi']; ?>"></td>
					</tr>
					<tr>
						<td>Nama Type</td>
						<td><input type="text" name="nama_type" value="<?php echo $d['nama_type']; ?>"></td>
					</tr>
					<tr>
						<td>Keterangan</td>
					<td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
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