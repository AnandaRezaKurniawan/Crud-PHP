<html>
	<head>
	<title>Silahkan Edit</title>
	</head>
	<body>
		<center>
			<h3>Edit Data</h3>
			<?php
				include "koneksi.php";
				$id_transportasi = $_GET['id_transportasi'];
				$data = mysql_query("SELECT *FROM transportasi where id_transportasi='$id_transportasi' ")or die (mysql_error());
				while($d = mysql_fetch_array($data)){
			?>
			<form action="?page=update_transportasi" method="POST" enctype="multipart/form-data">
				<table>
					<tr hidden>
						<td>Id Transportasi</td>
						<td><input type="text" name="id_transportasi" value="<?php echo $d['id_transportasi']; ?>"></td>
					</tr>
					<tr>
						<td>Kode</td>
						<td><input type="text" name="kode" value="<?php echo $d['kode']; ?>"></td>
					</tr>
					<tr>
						<td>Jumlah Kursi</td>
						<td><input type="text" name="jumlah_kursi" value="<?php echo $d['jumlah_kursi']; ?>"></td>
					</tr>
					<tr>
						<td>Keterangan</td>
					<td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
					</tr>
					<tr>
						<td>Id Type Transportasi</td>
						<td><input type="text" name="id_type_transportasi" value="<?php echo $d['id_type_transportasi']; ?>"></td>
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