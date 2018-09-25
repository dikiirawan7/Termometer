<?php
	include 'config/koneksi.php';
	
$id=$_GET['no'];

		$antrian="delete from tbhtermobaru where noordertermo = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		
		
		
		header("location:tmbkalibrasi.php")
?>