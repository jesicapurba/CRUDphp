<?php
session_start();
include("../koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM acara WHERE acara_id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data acara berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data acara gagal dihapus!";
    }

    header('Location: index.php');
    } else {
        die("Akses ditolak...");
    }
?>
