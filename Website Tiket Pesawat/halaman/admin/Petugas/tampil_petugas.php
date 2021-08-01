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
			<th>Id Petugas</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Petugas</th>
			<th>Id Level</th>
			<th>Aksi</th>
		</tr>
		<?php
			include ("koneksi.php");
			if (isset($_POST['cari'])) {
				$cari="WHERE nama_petugas LIKE'%".($_POST['keyword'])."%'";
			}
			global $cari;
			$data=mysql_query("SELECT * FROM petugas $cari ");
			while($d = mysql_fetch_array($data)){
		?>
				<tr>
					<td><?php echo $d['id_petugas']; ?></td>
					<td><?php echo $d['username']; ?></td>
					<td><?php echo $d['password']; ?></td>
					<td><?php echo $d['nama_petugas']; ?></td>
					<td><?php echo $d['id_level']; ?></td>
					
					<td>
						<a href="?page=edit_petugas&id_petugas=<?php echo $d['id_petugas']; ?> ">Edit</a>
						<a href="?page=hapus_petugas&id_petugas=<?php echo $d['id_petugas']; ?> "onclick ="return confirm('yakin akan di hapus?')">Hapus</a>
					</td>
				</tr>
				
			<?php } ?>
	</table>
	</br>
	<a href="?page=tambah_petugas" class="link-button">Tambah Data</a><br><br>

</center>
</body>
</html>