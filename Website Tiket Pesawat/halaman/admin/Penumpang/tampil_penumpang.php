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
			<th>Id Penumpang</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Penumpang</th>
			<th>Alamat Penumpang</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Telepon</th>
			<?php if ($_SESSION['level']=="Admin"){ ?>
				<th>Aksi</th>
			<?php } elseif ($_SESSION['level']=="Petugas"){ ?>
				<th>Aksi</th>
			<?php } ?>
		</tr>
		<?php
			include ("koneksi.php");
			if (isset($_POST['cari'])) {
				$cari="WHERE nama_penumpang LIKE'%".($_POST['keyword'])."%'";
			}
			global $cari;
			$data=mysql_query("SELECT * FROM penumpang $cari ");
			while($d = mysql_fetch_array($data)){
		?>
				<tr>
					<td><?php echo $d['id_penumpang']; ?></td>
					<td><?php echo $d['username']; ?></td>
					<td><?php echo $d['password']; ?></td>
					<td><?php echo $d['nama_penumpang']; ?></td>
					<td><?php echo $d['alamat_penumpang']; ?></td>
					<td><?php echo $d['tanggal_lahir']; ?></td>
					<td><?php echo $d['jenis_kelamin']; ?></td>
					<td><?php echo $d['telephone']; ?></td>
					<?php if ($_SESSION['level']=="Admin"){ ?>
					<td>
						<a href="?page=edit&id_penumpang=<?php echo $d['id_penumpang']; ?> ">Edit</a>
						<a  href="?page=hapus&id_penumpang=<?php echo $d['id_penumpang']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
						</td>
					<?php }elseif ($_SESSION['level']=="Petugas"){ ?>
					<td>
						<a  href="?page=edit&id_penumpang=<?php echo $d['id_penumpang']; ?> ">Edit</a>
						<a  href="?page=hapus&id_penumpang=<?php echo $d['id_penumpang']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
					</td>
					<?php } ?>
				</tr>
				
			<?php } ?>
	</table>
	</br>
	<?php if ($_SESSION['level']=="Admin"){ ?>
	<a href="?page=tambah" class="link-button">Tambah Data</a><br><br>
	<?php }elseif ($_SESSION['level']=="Petugas"){ ?>
	<a href="?page=tambah" class="link-button">Tambah Data</a><br><br>
	<?php } ?>
</center>
</body>
</html>