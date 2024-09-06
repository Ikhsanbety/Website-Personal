<head>
    <style>
        .bg-pink {
            background-color: #FF69B4; /* Hot Pink */
        }
        .text-pink {
            color: #FF69B4;
        }
    </style>
</head>
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4 mt-4 bg-pink text-white"> <!-- Tambahkan kelas bg-pink dan text-white -->
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Form Pengarsipan
            </div>
            <form action="create-penduduk-action.php" method="POST">
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="t_surat_keluar">Tanggal Surat Keluar</label>
                        <input type="date" name="t_surat_keluar" maxlength="16" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal_pergi">Tanggal Pergi</label>
                        <input type="date" name="tanggal_pergi" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>            
                    <div class="form-group mb-2">
                        <label for="no_spt">Nomor SPT</label>
                        <input type="text" name="no_spt" class="form-control">
                    </div>                
                    <div class="form-group mb-2">
                        <label for="no_sppd">Nomor SPPD</label>
                        <input type="text" name="no_sppd" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="Keterangan" class="form-control">
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
