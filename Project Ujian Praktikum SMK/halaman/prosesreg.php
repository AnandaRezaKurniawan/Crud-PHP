<?php 
include 'koneksi.php';
$no = $_POST['no'];
$id_user  = $_POST['id_user'];
$username  = $_POST['username'];
$password  = md5($_POST['password']);
$password2 = md5($_POST['password2']);
$nama_user  = $_POST['nama_user'];
$level	   = $_POST['level'];

$query	   = mysql_query("SELECT * FROM user WHERE username='$username'")or die(mysql_error());

if (mysql_num_rows($query) > 0) {
		?>
		<script>
			alert('Username Telah Digunakan, Silahkan Registrasi Ulang');
			document.location='register.php';
		</script>
		<?php  
	}else{
		if ($password !== $password2) {
			?>
			<script>
				alert('Konfirmasi Password Tidak  Sesuai');
				document.location='register.php';
			</script>
			<?php 
		}else{
			$reg=mysql_query("INSERT INTO user(no,id_user,username,password,nama_user,level)
												VALUES ('$no','$id_user','$username','$password','$nama_user','$level')");
			if ($reg) {
				?>
				<script>
					alert('Registrasi Berhasil, Silahkan Klik OK Untuk Login');
					document.location='index.php';
				</script>
				<?php  
			}else{
				echo "Proses gagal!";
			}
		}
	}	
 ?>