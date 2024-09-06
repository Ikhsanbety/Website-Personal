<?php 
require 'koneksi.php';

function hapusPenduduk($koneksi, $id) {

    // Siapkan statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("DELETE FROM tb_penduduk WHERE id = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $koneksi->error);
    }

    // Bind parameter
    $stmt->bind_param("i", $id); // "i" menandakan bahwa parameter adalah integer

    // Eksekusi statement
    $result = $stmt->execute();
    $hasil = false;
    // Periksa hasil eksekusi
    if($result){
        $hasil = true;
    }
    // Tutup statement
    $stmt->close();
    return $hasil;
}

// Ambil ID dari POST request
$id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Menggunakan intval untuk memastikan id adalah integer

// Panggil fungsi hapus
$hasil = hapusPenduduk($koneksi, $id);

// Tutup koneksi
$koneksi->close();
if ($hasil) {
    // Redirect ke halaman dengan notifikasi sukses
    header("Location: index.php?p=penduduk&notif=sukses");
} else {
    // Redirect ke halaman dengan notifikasi gagal
    header("Location: index.php?p=penduduk&notif=gagal");
}