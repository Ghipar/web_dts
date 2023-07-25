<?php
require_once('../conn.php');
$id = $_GET['kd'];
$sql = "UPDATE `trans_pinjam` SET 
 `status`='Kembali' WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    header('Location: transaksi.php?status=success');
    exit;
} else {
    header('Location: transaksi.php?status=error');
    exit;
}
