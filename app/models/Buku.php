
<?php

class Buku
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, judul, penulis, penerbit, tahun_terbit, kategori, stok
             FROM buku
             ORDER BY id ASC'
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
public function create(array $data): bool
{
    $stmt = $this->db->prepare(
        'INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, kategori, stok)
         VALUES (:judul, :penulis, :penerbit, :tahun_terbit, :kategori, :stok)'
    );

    return $stmt->execute([
        'judul' => $data['judul'],
        'penulis' => $data['penulis'],
        'penerbit' => $data['penerbit'],
        'tahun_terbit' => $data['tahun_terbit'],
        'kategori' => $data['kategori'],
        'stok' => $data['stok']
    ]);
}

public function getById(int $id): array|false
{
    $stmt = $this->db->prepare(
        'SELECT id, judul, penulis, penerbit, tahun_terbit, kategori, stok
         FROM buku
         WHERE id = :id'
    );

    $stmt->execute(['id' => $id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function update(int $id, array $data): bool
{
    $stmt = $this->db->prepare(
        'UPDATE buku
         SET judul = :judul,
             penulis = :penulis,
             penerbit = :penerbit,
             tahun_terbit = :tahun_terbit,
             kategori = :kategori,
             stok = :stok
         WHERE id = :id'
    );

    return $stmt->execute([
        'judul' => $data['judul'],
        'penulis' => $data['penulis'],
        'penerbit' => $data['penerbit'],
        'tahun_terbit' => $data['tahun_terbit'],
        'kategori' => $data['kategori'],
        'stok' => $data['stok'],
        'id' => $id
    ]);
}

public function delete(int $id): bool
{
    $stmt = $this->db->prepare(
        'DELETE FROM buku WHERE id = :id'
    );

    return $stmt->execute(['id' => $id]);
}

}
