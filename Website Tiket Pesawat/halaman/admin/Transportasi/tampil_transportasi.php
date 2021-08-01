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
			<th>Id Transportasi</th>
			<th>Kode</th>
			<th>Jumlah Kursi</th>
			<th>Keterangan</th>
			<th>id_type_transortasi</th>
			<?php if ($_SESSION['level']=="Admin"){ ?>
				<th>Aksi</th>
			<?php } elseif ($_SESSION['level']=="Petugas"){ ?>
				<th>Aksi</th>
			<?php } ?>
		</tr>
		<?php
			include ("koneksi.php");
			if (isset($_POST['cari'])) {
				$cari="WHERE kode LIKE'%".($_POST['keyword'])."%'";
			}
			global $cari;
			$data=mysql_query("SELECT * FROM transportasi $cari ");
			while($d = mysql_fetch_array($data)){

				$query=mysql_query("SELECT * FROM transportasi 
					INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi");

		?>
				<tr>
					<td><?php echo $d['id_transportasi']; ?></td>
					<td><?php echo $d['kode']; ?></td>
					<td><?php echo $d['jumlah_kursi']; ?></td>
					<td><?php echo $d['keterangan']; ?></td>
					<td><?php echo $d['id_type_transportasi']; ?></td>
					<?php if ($_SESSION['level']=="Admin"){ ?>
						<td>
							<a_transportasi href="?page=edit_transportasi&id_transportasi=<?php echo $d['id_transportasi']; ?> ">Edit</a>
							<a href="?page=hapus_transportasi&id_transportasi=<?php echo $d['id_transportasi']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
						</td>
					<?php } elseif ($_SESSION['level']=="Petugas"){ ?>
						<td>
							<a href="?page=edit_transportasi&id_transportasi=<?php echo $d['id_transportasi']; ?> ">Edit</a>
							<a href="?page=hapus_transportasi&id_transportasi=<?php echo $d['id_transportasi']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
						</td>
					<?php } ?>
				</tr>
				
			<?php } ?>
	</table>
	</br>
	<?php if ($_SESSION['level']=="Admin"){ ?>
	<a href="?page=tambah_transportasi" class="link-button">Tambah Data</a><br><br>
	<?php }elseif ($_SESSION['level']=="Petugas"){ ?>
	<a href="?page=tambah_transportasi" class="link-button">Tambah Data</a><br><br>
	<?php } ?>
</center>
</body>
</html>