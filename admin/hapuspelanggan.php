<?php
	include 'config/koneksi.php';
	
$id=$_GET['no'];

		$antrian="delete from pelanggan where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
	
		$antrian="delete from bantuiter1 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from bantuiter2 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from bantuiter3 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from bantuiter4 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from bantuiter5 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from bantuiter6 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		
		$antrian="delete from itermometer1 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from itermometer2 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from itermometer3 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from itermometer4 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from itermometer5 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		$antrian="delete from itermometer6 where noorder = '$id'";
		$hapus=mysqli_query($koneksi,$antrian);
		
		$antrian="delete from hkalibrasi where noorder like '%$id%'";
		$hapus=mysqli_query($koneksi,$antrian);
		
		
		
		header("location:index.php")
?>