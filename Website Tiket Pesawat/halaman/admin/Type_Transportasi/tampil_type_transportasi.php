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
			<th>Id Type Transportasi</th>
			<th>Nama Type</th>
			<th>Keterangan</th>
			<?php if ($_SESSION['level']=="Admin"){ ?>
			<th>Aksi</th>
			<?php }elseif ($_SESSION['level']=="Petugas"){ ?>
			<th>Aksi</th>
			<?php } ?>
		</tr>
		<?php
			include ("koneksi.php");
			if (isset($_POST['cari'])) {
				$cari="WHERE nama_type LIKE'%".($_POST['keyword'])."%'";
			}
			global $cari;
			$data=mysql_query("SELECT * FROM type_transportasi $cari ");
			while($d = mysql_fetch_array($data)){
		?>
				<tr>
					<td><?php echo $d['id_type_transportasi']; ?></td>
					<td><?php echo $d['nama_type']; ?></td>
					<td><?php echo $d['keterangan']; ?></td>
					<?php if ($_SESSION['level']=="Admin"){ ?>
					<td>
						<a href="?page=edit_type_transportasi&id_type_transportasi=<?php echo $d['id_type_transportasi']; ?> ">Edit</a>
						<a href="?page=hapus_type_transportasi&id_type_transportasi=<?php echo $d['id_type_transportasi']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
					</td>
					<?php }elseif ($_SESSION['level']=="Petugas"){ ?>
						<td>
						<a href="?page=edit_type_transportasi&id_type_transportasi=<?php echo $d['id_type_transportasi']; ?> ">Edit</a>
						<a href="?page=hapus_type_transportasi&id_type_transportasi=<?php echo $d['id_type_transportasi']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
					</td>
					<?php } ?>
				</tr>
				
			<?php } ?>
	</table>
	</br>
	<?php if ($_SESSION['level']=="Admin"){ ?>
	<a href="?page=tambah_type_transportasi" class="link-button">Tambah Data</a><br><br>
	<?php }elseif ($_SESSION['level']=="Petugas"){ ?>
	<a href="?page=tambah_type_transportasi" class="link-button">Tambah Data</a><br><br>
	<?php } ?>
	
</center>
</body>
</html>