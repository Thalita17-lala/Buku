
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    <form action="index.php?aksi=update&id=<?= (int) $buku['id'] ?>" method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required><br><br>

        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" value="<?= htmlspecialchars($buku['penerbit']) ?>" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" value="<?= htmlspecialchars((string) $buku['tahun_terbit']) ?>" required><br><br>

        <label>Kategori:</label><br>
        <input type="text" name="kategori" value="<?= htmlspecialchars($buku['kategori']) ?>" required><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" min="0" value="<?= htmlspecialchars((string) $buku['stok']) ?>" required><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <p><a href="index.php">Kembali ke Daftar Buku</a></p>
</body>
</html>
