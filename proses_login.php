<?php 
	require "koneksi.php";

	$id= $_GET['id'];

	$qr = "SELECT * FROM tb_user WHERE id='$id'";
	$result = mysqli_query($koneksi, $qr);
	$data = mysqli_fetch_assoc($result);
?>