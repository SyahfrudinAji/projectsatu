<?php
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';
	
	$nama	 = isset($_POST['nama']) ? $_POST['nama'] : '';
	$tempat	 = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahit'] : '';
	$tanggal = isset($_POST['tanggal_lahir'] ? $_POST['tempat_lahir']) : '';
	$alamat	 = isset($_POST['alamat']) ? $_POST['alamat'] : '';
	$jenis	 = isset($_POST['jenis']) ? $_POST['jenis'] : '';
	$id		 = isset($_POST['id']) ? $_POST('id');
	
	$tanggal_input	= date('Y-m-d H:i:s');
	$user_id		= $SESSION(['user_id']);
	
	if (!empty($nama) && !empty($tempat) && !empty($tanggal) && !empty($alamat) && !empty($jenis) && !empty($jenis)) {

		mysqli_query($connect, "UPDATE santri SET ")
	} 
}
?>