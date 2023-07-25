<?php
require_once('../conn.php');
$id = $_GET['status'];
$sql = "UPDATE `trans_pinjam` SET 
 `status`='Terlambat' WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    header('Location: transaksi.php?');
    exit;
} else {
    header('Location: transaksi.php?');
    exit;
}

?>