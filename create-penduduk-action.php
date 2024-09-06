<?php 
	require "koneksi.php";

	$t_surat_keluar 	= $_POST['t_surat_keluar'];
	$tanggal_pergi 		= $_POST['tanggal_pergi'];
	$tanggal_kembali 	= $_POST['tanggal_kembali'];
	$no_spt				= $_POST['no_spt'];
	$no_sppd 			= $_POST['no_sppd'];
	$nama_pegawai 		= $_POST['nama_pegawai'];
	$Keterangan 		= $_POST['Keterangan'];

	$sql = "INSERT INTO tb_penduduk(t_surat_keluar, tanggal_pergi, tanggal_kembali, no_spt, no_sppd, nama_pegawai, Keterangan) VALUES('$t_surat_keluar', '$tanggal_pergi', '$tanggal_kembali', '$no_spt', '$no_sppd', '$nama_pegawai', '$Keterangan' )";

	$hasil = mysqli_query($koneksi, $sql);

	if ($hasil) {
		header("Location:index.php?p=penduduk&notif=sukses");
	} else {
		header("Location:index.php?p=penduduk&notif=gagal");
	}
?>