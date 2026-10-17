
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $item): ?>
                <tr>
                    <td><?= htmlspecialchars((string) $item['id']) ?></td>
                    <td><?= htmlspecialchars($item['judul']) ?></td>
                    <td><?= htmlspecialchars($item['penulis']) ?></td>
                    <td><?= htmlspecialchars($item['penerbit']) ?></td>
                    <td><?= htmlspecialchars((string) $item['tahun_terbit']) ?></td>
                    <td><?= htmlspecialchars($item['kategori']) ?></td>
                    <td><?= htmlspecialchars((string) $item['stok']) ?></td>
                    <td><a href="index.php?aksi=edit&id=<?= (int) $item['id'] ?>">Edit</a>
                <form action="index.php?aksi=delete&id=<?= (int) $item['id'] ?>" method="POST" style="display:inline;">
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                </form></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
