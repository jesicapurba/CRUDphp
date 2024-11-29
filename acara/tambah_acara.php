<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h3> Tambah Data</h3>
    <form action ="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Acara</td>
                <td><input type ="text" name="nama_acara" required></td>
</tr>
<tr>
    <td>Lokasi</td>
    <td><input type ="text" name="lokasi_acara" required></td>
    </tr>
    <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi"></textarea></td>
</tr>
<tr>
                <td>Tanggal Acara</td>
                <td><input type ="date" name="tgl_acara" style="width: 100%"></td>
</tr>
</table>
<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</form>
</body>
</html>