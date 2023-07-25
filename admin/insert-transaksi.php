<?php
session_start();
if (empty($_SESSION['username'])) {
    header('location:../index.php');
} else {
    include "../conn.php";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['cars'];
    $nama = $_POST['nama'];
    $pinjam = $_POST['tgl_pinjam'];
    $kembali = $_POST['tgl_kembali'];
    $sql = "INSERT INTO trans_pinjam(id_buku, nama_peminjam, tgl_pinjam, tgl_kembali, status) VALUES 
    ('$judul', '$nama', '$pinjam', '$kembali', 'Dipinjam')";
    if (mysqli_query($conn, $sql)) {
        header('Location: input-transaksi.php?status=success');
        exit;
    } else {
        header('Location: input-transaksi.php?status=erro');
        exit;
    }
} else {
    header('Location: input-transaksi.php');
}
?>
