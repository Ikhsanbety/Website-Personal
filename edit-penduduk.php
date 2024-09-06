<?php 
	require "koneksi.php";

	$id = $_GET['id'];

	$qr = "SELECT * FROM tb_penduduk WHERE id='$id'";
	$result = mysqli_query($koneksi, $qr);
	$data = mysqli_fetch_assoc($result);
?>

<main>
	<div class="container-fluid px-4">
		<div class="card mb-4 mt-4 bg-pink"> <!-- Tambahkan kelas bg-pink -->
			<div class="card-header bg-pink text-white"> <!-- Tambahkan kelas bg-pink dan text-white -->
				<i class="fas fa-table me-1"></i>
				EDIT DATA
			</div>
			<form action="edit-penduduk-action.php" method="POST">
				<input type="hidden" name="id" value="<?=$data['id'];?>">
				<div class="card-body">
					<div class="form-group mb-2">
						<label for="t_surat_keluar">Tanggal Surat Keluar</label>
						<input type="date" name="t_surat_keluar" maxlength="16" class="form-control" value="<?=$data['t_surat_keluar'];?>">
					</div>
					<div class="form-group mb-2">
						<label for="tanggal_pergi">Tanggal Pergi</label>
						<input type="date" name="tanggal_pergi" class="form-control" value="<?=$data['tanggal_pergi'];?>">
					</div>
					<div class="form-group mb-2">
						<label for="tanggal_kembali">Tanggal Kembali</label>
						<input type="date" name="tanggal_kembali" class="form-control" value="<?=$data['tanggal_kembali'];?>">
					</div>
					<div class="form-group mb-2">
						<label for="no_spt">No SPT</label>
						<input type="text" name="no_spt" class="form-control" value="<?=$data['no_spt'];?>">
					</div>
					<div class="form-group mb-2">
						<label for="no_sppd">No SPPD</label>
						<input type="text" name="no_sppd" class="form-control" value="<?=$data['no_sppd'];?>">
					</div>
					<div class="form-group mb-2">
						<label for="nama_pegawai">Nama Pegawai</label>
						<input type="text" name="nama_pegawai" class="form-control" value="<?=$data['nama_pegawai'];?>">
					</div>
					<div class="form-group mb-2">
						<label for="Keterangan">Keterangan</label>
						<input type="text" name="Keterangan" class="form-control" value="<?=$data['Keterangan'];?>">
					</div>
				</div>
				<div class="card-footer bg-pink text-white"> <!-- Tambahkan kelas bg-pink dan text-white -->
					<a href="javascript:window.history.go(-1)" class="btn btn-sm btn-warning">Kembali</a>
					<input type="submit" value="Simpan" class="btn btn-sm btn-success">
				</div>
			</form>
		</div>
	</div>
</main>

<style>
    .bg-pink {
        background-color: #FF69B4; /* Warna Hot Pink */
    }
    .text-white {
        color: white;
    }
</style>
