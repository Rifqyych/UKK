# Sistem Informasi Perpustakaan

Aplikasi perpustakaan berbasis Laravel 12 dan Filament 4 untuk mengelola data buku, anggota, serta peminjaman dan pengembalian buku.

## Struktur Repository

- `Dokumentasi/` berisi dokumentasi UKK 2026 dalam format PDF.
- `laravel/` berisi source code aplikasi Laravel.
- `library.sql` berisi skema database MySQL/MariaDB.

## Fitur

- Login dan pendaftaran anggota.
- Pengelolaan buku dan anggota melalui panel admin.
- Peminjaman buku oleh anggota, dengan tenggat pengembalian tujuh hari.
- Pencatatan pengembalian dan denda keterlambatan.
- Ringkasan jumlah buku, anggota, dan peminjaman aktif di Dashboard.

## Teknologi

- PHP 8.2 atau lebih baru
- Laravel 12
- Filament 4
- SQLite untuk konfigurasi awal, atau MySQL/MariaDB

## Menjalankan Aplikasi

Masuk ke folder aplikasi:

```bash
cd laravel
composer install
```

Salin `.env.example` menjadi `.env`, lalu buat application key dan database SQLite:

```bash
cp .env.example .env
php artisan key:generate
```

Buat file `database/database.sqlite` jika belum ada. Di Windows PowerShell:

```powershell
New-Item -ItemType File -Path database/database.sqlite -Force
```

Jalankan migration, data contoh, lalu server lokal:

```bash
php artisan migrate --seed
php artisan serve
```

Buka alamat yang ditampilkan oleh `artisan serve`, lalu masuk ke panel admin di `/admin`.

## Menggunakan MySQL/MariaDB

Buat database bernama `perpustakaan`, impor `library.sql`, lalu atur koneksi database di `laravel/.env` (`DB_CONNECTION=mysql`, host, port, nama database, username, dan password). Setelah itu jalankan:

```bash
cd laravel
php artisan db:seed
php artisan serve
```

File SQL berisi skema dan catatan migration, sedangkan data contoh dibuat oleh seeder Laravel. Akun contoh hanya untuk pengembangan; ganti kredensial sebelum aplikasi digunakan di lingkungan publik.

## Dokumentasi UKK

Lihat [Dokumentasi UKK 2026](Dokumentasi/Dokumentasi%20UKK%202026.pdf) untuk ERD, deskripsi program, tampilan aplikasi, dan catatan debugging.
