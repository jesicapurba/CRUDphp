<?php

session_start();
include("../koneksi.php");
if(isset($_POST['simpan'])){

    $nama_acara=$_POST['nama_acara'];
    $lokasi_acara=$_POST['lokasi_acara'];
    $deskripsi=$_POST['deskripsi'];
    $tgl_acara=$_POST['tgl_acara'];

    $sql = "INSERT INTO acara
    (nama_acara, lokasi_acara, deskripsi, tgl_acara)
    VALUES ('$nama_acara', '$lokasi_acara', '$deskripsi', '$tgl_acara')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data acara berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data acara gagal ditambahkan!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
    }
?>