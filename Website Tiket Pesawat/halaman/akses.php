<?php 
session_start();

if (!isset($_SESSION['level'])) {
	echo '<script language="javascript">alert("Anda harus login!"); document.location="../index.php"; </script>';
}

 ?>