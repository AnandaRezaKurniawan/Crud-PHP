user<?php 
include 'koneksi.php';
session_start();
if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$query=mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");

	if (mysql_num_rows($query) == 0) {
		?>
		<script>
			alert('Akun Salah / Tidak Terdaftar');
			document.location='index.php';
		</script>
		<?php
	}else{
		$login=mysql_fetch_assoc($query);

		$_SESSION['id_user']	= $login['id_user'];
		$_SESSION['username']	= $login['username'];
		$_SESSION['password']	= $login['password'];
		$_SESSION['level']		= $login['level'];

		?>
		<script>
			alert('Selamat Datang <?php echo $_SESSION['username']; ?> di Aplikasi Travel Kemana Aja sebagai <?php echo $_SESSION['level']; ?>');
			document.location='halaman/index.php';
		</script>
		<?php 
	}
}

 ?>