<html>
	<head>
	<title>Silahkan Edit</title>
	</head>
	<body>
		<center>
			<h3>Edit Data</h3>
			<?php
				include "koneksi.php";
				$id_pemesanan = $_GET['id_pemesanan'];
				$data = mysql_query("SELECT *FROM pemesanan where id_pemesanan='$id_pemesanan' ")or die (mysql_error());
				while($d = mysql_fetch_array($data)){
			?>
			<form action="?page=update_pemesanan" method="POST" enctype="multipart/form-data">
				<table>
					<tr hidden>
						<td>Id Pemesanan</td>
						<td><input type="text" name="id_pemesanan" value="<?php echo $d['id_pemesanan']; ?>"></td>
					</tr>
					<tr>
						<td>Kode Pemesanan</td>
						<td><input type="text" name="kode_pemesanan" value="<?php echo $d['kode_pemesanan']; ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Pemesanan</td>
						<td><input type="date" name="tanggal_pemesanan" value="<?php echo $d['tanggal_pemesanan']; ?>"></td>
					</tr>
					<tr>
						<td>Tempat Pemesanan</td>
					<td><input type="text" name="tempat_pemesanan" value="<?php echo $d['tempat_pemesanan']; ?>"></td>
					</tr>
					<tr>
						<td>Id Pelanggan</td>
						<td><input type="text" name="id_pelanggan" value="<?php echo $d['id_pelanggan']; ?>"></td>
					</tr>
					<tr>
						<td>Kode Kursi</td>
						<td><input type="text" name="kode_kursi" value="<?php echo $d['kode_kursi']; ?>"></td>
					</tr>
					<tr>
						<td>Id Rute</td>
						<td><input type="text" name="id_rute" value="<?php echo $d['id_rute']; ?>"></td>
					</tr>
					<tr>
						<td>Tujuan</td>
						<td><input type="text" name="tujuan" value="<?php echo $d['tujuan']; ?>"></td>
					</tr>
					<tr>
						<td>Tgl Berangkat</td>
						<td><input type="date" name="tanggal_berangkat" value="<?php echo $d['tanggal_berangkat']; ?>"></td>
					</tr>
					<tr>
						<td>Jam Cekin</td>
						<td><input type="time" name="jam_cekin" value="<?php echo $d['jam_cekin']; ?>"></td>
					</tr>
					<tr>
						<td>Jam Berangkat</td>
						<td><input type="time" name="jam_berangkat" value="<?php echo $d['jam_berangkat']; ?>"></td>
					</tr>
					<tr>
						<td>Total Bayar</td>
						<td><input type="text" name="total_bayar" value="<?php echo $d['total_bayar']; ?>"></td>
					</tr>
					<tr>
						<td>Id Petugas</td>
						<td><input type="text" name="id_petugas" value="<?php echo $d['id_petugas']; ?>"></td>
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