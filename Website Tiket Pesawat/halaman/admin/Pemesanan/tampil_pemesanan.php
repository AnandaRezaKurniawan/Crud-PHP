<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style_1.css">
	</head>
	<body>
	</br></br>
<center>
		<form method="POST">
			
			<input type="text" name="keyword">
			<button type="submit" name="cari">Cari</button>

		</form>
	<br><br>
		 
		
	<table border="1" class="table">
		<tr>
			<th>Id Pemesanan</th>
			<th>Kode Pemesanan</th>
			<th>Tanggal Pemesanan</th>
			<th>Tempat Pemesanan</th>
			<th>Id Pelanggan</th>
			<th>Kode Kursi</th>
			<th>Id Rute</th>
			<th>Tujuan</th>
			<th>Tgl Berangkat</th>
			<th>Jam Cekin</th>
			<th>Jam Berangkat</th>
			<th>Total Bayar</th>
			<th>Id Petugas</th>
			<?php if ($_SESSION['level']=="Admin"){ ?>
				<th>Aksi</th>
			<?php } elseif ($_SESSION['level']=="Petugas"){ ?>
				<th>Aksi</th>
			<?php } ?>
		</tr>
		<?php
			include ("koneksi.php");
			if (isset($_POST['cari'])) {
				$cari="WHERE kode_pemesanan LIKE'%".($_POST['keyword'])."%'";
			}
			global $cari;
			$data=mysql_query("SELECT * FROM pemesanan $cari ");
			while($d = mysql_fetch_array($data)){

				$query=mysql_query("SELECT * FROM pemesanan 
									INNER JOIN penumpang ON pemesanan.id_pelanggan = penumpang.id_penumpang
									INNER JOIN rute ON pemesanan.id_rute = rute.id_rute
									INNER JOIN penumpang ON pemesanan.id_petugas = petugas.id_petugas
									");	

		?>
				<tr>
					<td><?php echo $d['id_pemesanan']; ?></td>
					<td><?php echo $d['kode_pemesanan']; ?></td>
					<td><?php echo $d['tanggal_pemesanan']; ?></td>
					<td><?php echo $d['tempat_pemesanan']; ?></td>
					<td><?php echo $d['id_pelanggan']; ?></td>
					<td><?php echo $d['kode_kursi']; ?></td>
					<td><?php echo $d['id_rute']; ?></td>
					<td><?php echo $d['tujuan']; ?></td>
					<td><?php echo $d['tanggal_berangkat']; ?></td>
					<td><?php echo $d['jam_cekin']; ?></td>
					<td><?php echo $d['jam_berangkat']; ?></td>
					<td><?php echo $d['total_bayar']; ?></td>
					<td><?php echo $d['id_petugas']; ?></td>
					<?php if ($_SESSION['level']=="Admin"){ ?>
					<td>
						<a href="?page=edit_pemesanan&id_pemesanan=<?php echo $d['id_pemesanan']; ?> ">Edit</a>
						<a href="?page=hapus_pemesanan&id_pemesanan=<?php echo $d['id_pemesanan']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
					</td>
						<?php }elseif ($_SESSION['level']=="Petugas"){ ?>
					<td>
						<a  href="?page=edit_pemesanan&id_pemesanan=<?php echo $d['id_pemesanan']; ?> ">Edit</a>
						<a  href="?page=hapus_pemesanan&id_pemesanan=<?php echo $d['id_pemesanan']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
					</td>
					<?php } ?>
				</tr>
				
			<?php } ?>
	</table>
	</br>
	<a href="?page=tambah_pemesanan" class="link-button">Tambah Data</a><BR><BR>
	
</center>
</body>
</html>