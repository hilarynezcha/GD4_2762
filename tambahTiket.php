<!DOCTYPE html>
<html>
<body>
    <h1>Tambah Tiket War</h1>
    <form action="prosesTambah.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="Nama Konser" required><br>
        <input type="text" name="kategori" placeholder="Kategori (VIP/Festival)" required><br>
        <input type="number" name="harga" placeholder="Harga" required><br>
        <label>Upload Bukti:</label><br>
        <input type="file" name="bukti" required><br>
        <button type="submit">Simpan Tiket</button>
    </form>
</body>
</html>