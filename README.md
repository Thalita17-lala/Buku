
# Aplikasi Data Buku

Aplikasi pengelolaan data buku menggunakan PHP Native dengan konsep Model-View-Controller (MVC) dan database MySQL.

## Teknologi
- PHP Native
- MySQL
- PDO
- HTML
- Git

## Fitur
- Menampilkan daftar buku
- Menambahkan data buku
- Mengedit data buku
- Menghapus data buku
- Validasi kolom wajib diisi

## Struktur Folder
- `app/controllers/` - Mengatur alur aplikasi
- `app/models/` - Mengelola data dan query database
- `app/views/` - Menampilkan halaman aplikasi
- `config/` - Konfigurasi database
- `database/` - File SQL
- `public/` - Titik masuk aplikasi

## Cara Menjalankan
1. Jalankan Apache dan MySQL melalui Laragon.
2. Buat database bernama `buku` di phpMyAdmin.
3. Impor file `database/buku.sql`.
4. Buka aplikasi melalui:

   `http://localhost/Buku/public/`

## Database
Database: `buku`

Tabel: `buku`

Kolom:
- `id`
- `judul`
- `penulis`
- `penerbit`
- `tahun_terbit`
- `kategori`
- `stok`
