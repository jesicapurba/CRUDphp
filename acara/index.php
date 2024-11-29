<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
    </style>
    </head>
    <body>
    <h2> Data acara </h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
    <?php unset ($_SESSION['notifikasi']); ?>
    <?php endif; ?>
    <table>
    <thead>
        <tr align="center">
            <th>#</th>
            <th>Nama Acara</th>
            <th>Lokasi</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th><a href ="tambah_acara.php">Tambah Data</a></th>
    </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = $db->query("SELECT * FROM acara");
        while ($acara = $query->fetch_assoc()){
         ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $acara['nama_acara'] ?></td>
            <td><?php echo $acara['lokasi_acara'] ?></td>
            <td><?php echo $acara['deskripsi'] ?></td>
            <td><?php echo date ("d-m-Y",
            strtotime($acara['tgl_acara'])) ?>
            </td>
<td align="center">
    <a href ="edit_acara.php?id=<?php echo $acara['acara_id'] ?>">Edit</a>
    <a onclick ="return confirm('Anda yakin ingin menghapus data?')"
    href="hapus_acara.php?id=<?php echo $acara['acara_id'] ?>">Hapus</a>
        </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>