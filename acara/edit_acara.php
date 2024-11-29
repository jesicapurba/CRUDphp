<?php
include("../koneksi.php");
$id = $_GET ['id'];

$query = $db->query("SELECT * FROM acara WHERE acara_id='$id'");
$acara = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h3> Edit Data Acara</h3>
    <form action = "proses_edit.php" method="POST">
        <input type="hidden" name="acara_id" value="<?php echo $acara['acara_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Acara</td>
                <td>
                <input type ="text" name="nama_acara" 
                value="<?php echo $acara['nama_acara']; ?>" required>
            </td>
</tr>
<tr>
                <td>Lokasi</td>
                <td>
                <input type ="text" name="lokasi_acara" 
                value="<?php echo $acara['lokasi_acara']; ?>" required>
            </td>
</tr>
<tr>
                <td>Deskripsi</td>
                <td>
                <textarea name="deskripsi"><?php echo $acara['deskripsi']; ?></textarea>
                </td>
</tr>
<tr>
                <td>Tanggal</td>
                <td>
                <input type ="date" name="tgl_acara" 
                value="<?php echo $acara['tgl_acara']; ?>" style="width: 100%">
            </td>
</tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>