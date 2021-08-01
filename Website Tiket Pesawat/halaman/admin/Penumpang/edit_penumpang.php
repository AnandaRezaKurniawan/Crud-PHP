<html>
	<head>
	<title>Silahkan Edit</title>
	</head>
	<body>
		<center>
			<h3>Edit Data</h3>
			<?php
				include "koneksi.php";
				$id_penumpang = $_GET['id_penumpang'];
				$data = mysql_query("SELECT *FROM penumpang where id_penumpang='$id_penumpang' ")or die (mysql_error());
				while($d = mysql_fetch_array($data)){
			?>
			<form action="?page=update" method="POST" enctype="multipart/form-data">
				<table>
					<tr hidden>
						<td><input type="hidden" name="id_penumpang" value="<?php echo $d['id_penumpang']; ?>"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
					<td><input type="password" name="password" value="<?php echo $d['password']; ?>"></td>
					</tr>
					<tr>
						<td>Nama Penumpang</td>
						<td><input type="text" name="nama_penumpang" value="<?php echo $d['nama_penumpang']; ?>"></td>
					</tr>
					<tr>
						<td>Alamat Penumpang</td>
						<td><input type="text" name="alamat_penumpang" value="<?php echo $d['alamat_penumpang']; ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>
								<?php if($d['jenis_kelamin']=="Laki-laki"){ ?>
		                        	<input type="radio" name="jenis_kelamin" value="Laki-laki" checked="checked">Laki-laki 
		                        	<input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan 
		                            
		                    	<?php }else if($d['jenis_kelamin']=="Perempuan"){ ?>
		                        	<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
		                       		<input type="radio" name="jenis_kelamin" value="Perempuan" checked="checked">Perempuan 
		                            
		                    	<?php }else{ ?>   
		                        	<input type="radio" name="jenis_kelamin" value="Laki-laki" >Laki-laki 
		                        	<input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan
		                    	<?php }?> 
							</td>
					</tr>
					<tr>
						<td>Telp</td>
						<td><input type="text" name="telephone" value="<?php echo $d['telephone']; ?>"></td>
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