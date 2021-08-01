<html>
	<head>
	<title>Silahkan Edit</title>
	</head>
	<body>
		<center>
			<h3>Edit Data</h3>
			<?php
				include "koneksi.php";
				$id_rute = $_GET['id_rute'];
				$data = mysql_query("SELECT *FROM rute where id_rute='$id_rute' ")or die (mysql_error());
				while($d = mysql_fetch_array($data)){
			?>
			<form action="?page=update_rute" method="POST" enctype="multipart/form-data">
				<table>
					<tr hidden>
						<td>Id Rute</td>
						<td><input type="text" name="id_rute"  value="<?php echo $d['id_rute']; ?>"></td>
					</tr>
					<tr>
						<td>Tujuan</td>
						<td><input type="text" name="tujuan" value="<?php echo $d['tujuan']; ?>"></td>
					</tr>
					<tr>
						<td>Rute Awal</td>
					<td><input type="text" name="rute_awal" value="<?php echo $d['rute_awal']; ?>"></td>
					</tr>
					<tr>
						<td>Rute Akhir</td>
						<td><input type="text" name="rute_akhir" value="<?php echo $d['rute_akhir']; ?>"></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
					</tr>
					<tr>
						<td>Id Transportasi</td>
						<td><input type="text" name="id_transportasi" value="<?php echo $d['id_transportasi']; ?>"></td>
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