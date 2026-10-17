
<?php

session_start();

require_once __DIR__ . '/../models/Buku.php';

class BukuController
{
    private Buku $model;

    public function __construct(PDO $db)
    {
        $this->model = new Buku($db);
    }

    public function index(): void
    {
        $buku = $this->model->getAll();

        require __DIR__ . '/../views/buku/index.php';
    }
    
public function create(): void
{
    require __DIR__ . '/../views/buku/create.php';
}

public function store(): void
{
    foreach (['judul', 'penulis', 'penerbit', 'tahun_terbit', 'kategori', 'stok'] as $kolom) {
        if (!isset($_POST[$kolom]) || trim((string) $_POST[$kolom]) === '') {
            die('Semua kolom wajib diisi.');
        }
    }

    $berhasil = $this->model->create($_POST);

if (!$berhasil) {
    die('Data buku gagal disimpan.');
}

   $_SESSION['pesan'] = 'Data buku berhasil disimpan.';
header('Location: index.php');
exit;
}

public function edit(): void
{
    $id = (int) ($_GET['id'] ?? 0);
    $buku = $this->model->getById($id);

    if (!$buku) {
        die('Data buku tidak ditemukan.');
    }

    require __DIR__ . '/../views/buku/edit.php';
}

public function update(): void
{
    $id = (int) ($_GET['id'] ?? 0);

    foreach (['judul', 'penulis', 'penerbit', 'tahun_terbit', 'kategori', 'stok'] as $kolom) {
        if (!isset($_POST[$kolom]) || trim((string) $_POST[$kolom]) === '') {
            die('Semua kolom wajib diisi.');
        }
    }

    $berhasil = $this->model->update($id, $_POST);

    if (!$berhasil) {
        die('Data buku gagal diperbarui.');
    }

     $_SESSION['pesan'] = 'Data buku berhasil diperbarui.';
   header('Location: index.php');
   exit;
}

public function delete(): void
{
    $id = (int) ($_GET['id'] ?? 0);

    if ($id <= 0) {
        die('ID buku tidak valid.');
    }

    $berhasil = $this->model->delete($id);

    if (!$berhasil) {
        die('Data buku gagal dihapus.');
    }

   $_SESSION['pesan'] = 'Data buku berhasil dihapus.';
header('Location: index.php');
exit;
}

}
