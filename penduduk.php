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
                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pengarsipan
                                <div style="float:right;">
                                    <a href="index.php?p=create-penduduk" class="btn btn-sm btn-primary">Tambah Data</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal Surat Keluar</th>
                                            <th>Tanggal Pergi</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Nomor SPT</th>
                                            <th>Nomor SPPD</th>
                                            <th>Nama Pegawai</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 0.;
                                            $qr = 'SELECT * FROM tb_penduduk';
                                            $result = mysqli_query($koneksi, $qr);
                                            foreach($result as $data) {
                                             $no++;
                                        ?>
                                        <tr>
                                            <td width='5%'><?php echo $no;?></td>
                                            <td><?=$data['t_surat_keluar'];?></td>
                                            <td><?=$data['tanggal_pergi']?></td>
                                            <td><?=$data['tanggal_kembali'];?></td>
                                            <td><?=$data['no_spt'];?></td>
                                            <td><?=$data['no_sppd'];?></td>
                                            <td><?=$data['nama_pegawai'];?></td>
                                            <td width='50%'><?=$data['Keterangan'];?></td>                                  
                                            <td>
                                                <a href="index.php?p=edit-penduduk&id=<?=$data['id'];?>" type="button"class="btn btn-success btn-sm"><i class="fa fa-pencil"></i>Edit</a>
                                                <a href="index.php?p=Hapus-penduduk&id=<?=$data['id']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah Anda Yakin Akan Menghapus Data Tersebut?')"><i class="fa fa-trash"></i>Hapus</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>