<?php 
include 'akses.php';
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Web Aplikasi Tiket Pesawat dan KA</title>
		<link rel="stylesheet" type="text/css" href="style_2.css">
	</head>
	<body>
	<div class="menu">
		<ul>
			<li><a href="index.php">DASBOARD</a></li>
			

				<?php if ($_SESSION['level'] == "Admin"){ ?>
				
					<li><a href="?page=penumpang">Penumpang</a></li>
					<li><a href="?page=pemesanan">Pemesanan</a></li>
					<li><a href="?page=petugas">Petugas</a></li>
					<li><a href="?page=rute">Rute</a></li>
					<li><a href="?page=transportasi">Transportasi</a></li>
					<li><a href="?page=type_transportasi">Type Transport</a></li>
					<li><a href="?page=laporan">Laporan</a></li>

				<?php }elseif ($_SESSION['level'] == "Petugas") { ?>

					<li><a href="?page=penumpang">Penumpang</a></li>
					
					<!-- <li><a href="?page=petugas">Petugas</a></li>
 -->					<li><a href="?page=rute">Rute</a></li>
					<li><a href="?page=transportasi">Transportasi</a></li>
					<li><a href="?page=type_transportasi">Type Transport</a></li>
					<li><a href="?page=laporan">Laporan</a></li>

				<?php }elseif ($_SESSION['level'] == "Penumpang") { ?>
					
					<li><a href="?page=penumpang">Penumpang</a></li>

					<li><a href="?page=pemesanan">Pemesanan</a></li>
					<li><a href="?page=rute">Rute</a></li>
					<li><a href="?page=transportasi">Transportasi</a></li>
					<li><a href="?page=type_transportasi">Type Transport</a></li>
				

				<?php } ?>
		

			<li>
				<a href="../logout.php" onclick="return confirm('Yakin Akan Log Out ?')">LOGOUT</a>
			</li>
		</ul>
		</div>
		<div class="badan">
		<?php
	
	if (isset($_GET['page']) > 0) {
		$hal = str_replace(".","/", $_GET['page']).".php";
	}else {
		$hal="dasboard/home.php";
	}if (file_exists($hal)){
		include($hal);
	}
	
	?>

	<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];

		switch ($page) {
			case 'penumpang':
				include"admin/Penumpang/tampil_penumpang.php";
				break;
			case 'tambah':
				include"admin/Penumpang/tambah_penumpang.php";
				break;
			case 'simpan':
				include"admin/Penumpang/simpan_penumpang.php";
				break;
			case 'hapus':
				include"admin/Penumpang/hapus_penumpang.php";
				break;
			case 'edit':
				include"admin/Penumpang/edit_penumpang.php";
				break;
				case 'update':
				include"admin/Penumpang/update_penumpang.php";
				break;
		}
	}
?>
<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];

		switch ($page) {
			case 'pemesanan':
				include"admin/Pemesanan/tampil_pemesanan.php";
				break;
			case 'tambah_pemesanan':
				include"admin/Pemesanan/tambah.php";
				break;
			case 'simpan_pemesanan':
				include"admin/Pemesanan/simpan_pemesanan.php";
				break;
			case 'hapus_pemesanan':
				include"admin/Pemesanan/hapus_pemesanan.php";
				break;
			case 'edit_pemesanan':
				include"admin/Pemesanan/edit_pemesanan.php";
				break;
			case 'update_pemesanan':
				include"admin/Pemesanan/update_pemesanan.php";
				break;
		}
	}
?>
<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];

		switch ($page) {
			case 'petugas':
				include"admin/petugas/tampil_petugas.php";
				break;
			case 'tambah_petugas':
				include"admin/petugas/tambah_petugas.php";
				break;
			case 'simpan_petugas':
				include"admin/petugas/simpan_petugas.php";
				break;
			case 'hapus_petugas':
				include"admin/petugas/hapus_petugas.php";
				break;
			case 'edit_petugas':
				include"admin/petugas/edit_petugas.php";
				break;
			case 'update_petugas':
				include"admin/petugas/update_petugas.php";
				break;
		}
	}
?>
<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];

		switch ($page) {
			case 'rute':
				include"admin/rute/tampil_rute.php";
				break;
			case 'tambah_rute':
				include"admin/rute/tambah_rute.php";
				break;
			case 'simpan_rute':
				include"admin/rute/simpan_rute.php";
				break;
			case 'hapus_rute':
				include"admin/rute/hapus_rute.php";
				break;
			case 'edit_rute':
				include"admin/rute/edit_rute.php";
				break;
			case 'update_rute':
				include"admin/rute/update_rute.php";
				break;
		}
	}
?>
<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];

		switch ($page) {
			case 'transportasi':
				include"admin/transportasi/tampil_transportasi.php";
				break;
			case 'tambah_transportasi':
				include"admin/transportasi/tambah_transportasi.php";
				break;
			case 'simpan_transportasi':
				include"admin/transportasi/simpan_transportasi.php";
				break;
			case 'hapus_transportasi':
				include"admin/transportasi/hapus_transportasi.php";
				break;
			case 'edit_transportasi':
				include"admin/transportasi/edit_transportasi.php";
				break;
			case 'update_transportasi':
				include"admin/transportasi/update_transportasi.php";
				break;
		}
	}
?>
<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];

		switch ($page) {
			case 'type_transportasi':
				include"admin/type_transportasi/tampil_type_transportasi.php";
				break;
			case 'tambah_type_transportasi':
				include"admin/type_transportasi/tambah_type_transportasi.php";
				break;
			case 'simpan_type_transportasi':
				include"admin/type_transportasi/simpan_type_transportasi.php";
				break;
			case 'hapus_type_transportasi':
				include"admin/type_transportasi/hapus_type_transportasi.php";
				break;
			case 'edit_type_transportasi':
				include"admin/type_transportasi/edit_type_transportasi.php";
				break;
			case 'update_type_transportasi':
				include"admin/type_transportasi/update_type_transportasi.php";
				break;

				//LAPORAN
				case 'laporan';
					include 'laporan/index.php';
					break;
		}
	}
?>


	</div>
	</body>
</html>
 