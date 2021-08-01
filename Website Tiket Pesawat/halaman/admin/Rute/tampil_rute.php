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
			<th>Id Rute</th>
			<th>Tujuan</th>
			<th>Rute Awal</th>
			<th>Rute Akhir</th>
			<th>Harga</th>
			<th>Id Transportasi</th>
			<?php if ($_SESSION['level']=="Admin"){ ?>
				<th>Aksi</th>
			<?php }elseif ($_SESSION['level']=="Petugas"){ ?>
				<th>Aksi</th>
			<?php } ?>
		</tr>
		<?php
			include ("koneksi.php");
			if (isset($_POST['cari'])) {
				$cari="WHERE tujuan LIKE'%".($_POST['keyword'])."%'";
			}
			global $cari;
			$data=mysql_query("SELECT * FROM rute $cari ");
			while($d = mysql_fetch_array($data)){


			$query=mysql_query("SELECT * FROM rute 
						INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi");

		?>
			
				<tr>
					<td><?php echo $d['id_rute']; ?></td>
					<td><?php echo $d['tujuan']; ?></td>
					<td><?php echo $d['rute_awal']; ?></td>
					<td><?php echo $d['rute_akhir']; ?></td>
					<td><?php echo $d['harga']; ?></td>
					<td><?php echo $d['id_transportasi']; ?></td>
					<?php if ($_SESSION['level']=="Admin"){ ?>
						<td>
							<a href="?page=edit_rute&id_rute=<?php echo $d['id_rute']; ?> ">Edit</a>
							<a href="?page=hapus_rute&id_rute=<?php echo $d['id_rute']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
						</td>
					<?php } elseif ($_SESSION['level']=="Petugas"){ ?>
						<td>
							<a href="?page=edit_rute&id_rute=<?php echo $d['id_rute']; ?> ">Edit</a>
							<a href="?page=hapus_rute&id_rute=<?php echo $d['id_rute']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
						</td>
					<?php } ?>
				</tr>
				
			<?php } ?>
	</table>
	</br>
	<?php if ($_SESSION['level']=="Admin"){ ?>
	<a href="?page=tambah_rute" class="link-button">Tambah Data</a><br><br>
	<?php }elseif ($_SESSION['level']=="Petugas"){ ?>
	<a href="?page=tambah_rute" class="link-button">Tambah Data</a><br><br>
	<?php } ?>
	
</center>
</body>
</html>