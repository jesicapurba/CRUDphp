<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['acara_id'];
    $nama_acara = $_POST['nama_acara'];
    $lokasi_acara = $_POST['lokasi_acara'];
    $deskripsi = $_POST['deskripsi'];
    $tgl_acara = $_POST['tgl_acara'];

    $sql = "UPDATE acara SET
    nama_acara='$nama_acara',
    lokasi_acara='$lokasi_acara',
    deskripsi= '$deskripsi',
    tgl_acara='$tgl_acara'
    WHERE acara_id= $id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data acara berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data acara gagal diperbarui!";
    } 
    header('Location: index.php');
    } else {
    die("Akses ditolak...");
    }
?>
    
