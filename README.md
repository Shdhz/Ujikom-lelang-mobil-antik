# Ujikom Lelang Mobil Antik

Proyek ini adalah aplikasi berbasis web untuk proses lelang mobil antik. Aplikasi ini dirancang untuk mempermudah pengelolaan proses lelang, mulai dari pendaftaran mobil antik hingga proses penawaran dan transaksi. 

## Fitur Utama

1. **Registrasi Pengguna**: 
   - Pengguna dapat mendaftar sebagai peserta lelang atau administrator.

2. **Manajemen Data Mobil Antik**:
   - Tambah, edit, dan hapus data mobil antik.

3. **Proses Lelang**:
   - Administrator dapat membuka lelang.
   - Peserta dapat memberikan penawaran.
   - Sistem mencatat penawaran tertinggi secara otomatis.

4. **Riwayat Lelang**:
   - Menampilkan riwayat lelang beserta hasilnya.

5. **Autentikasi dan Hak Akses**:
   - Hak akses yang berbeda untuk administrator dan peserta.

## Teknologi yang Digunakan

- **Bahasa Pemrograman**: PHP
- **Framework**: Laravel 10
- **Basis Data**: MySQL
- **Frontend**: HTML, CSS, JavaScript (dengan Bootstrap)

## Instalasi dan Penggunaan

### Persyaratan Sistem
- PHP 7.4 atau lebih baru
- MySQL 5.7 atau lebih baru
- Composer
- Web server (misalnya, Apache atau Nginx)

### Langkah Instalasi
1. Clone repositori:
   ```bash
   git clone https://github.com/Shdhz/Ujikom-lelang-mobil-antik.git
   ```
2. Masuk ke direktori proyek:
   ```bash
   cd Ujikom-lelang-mobil-antik
   ```
3. Instal dependensi menggunakan Composer:
   ```bash
   composer install
   ```
4. Konfigurasi file `.env`:
   - Salin file `.env.example` menjadi `.env`.
   - Atur konfigurasi database Anda pada bagian berikut:
     ```env
     database.default.hostname = localhost
     database.default.database = nama_database
     database.default.username = nama_pengguna
     database.default.password = kata_sandi
     database.default.DBDriver = MySQLi
     ```
5. Migrasi database:
   Jalankan perintah berikut untuk membuat tabel yang dibutuhkan:
   ```bash
   php artisan migrate
   ```
6. Jalankan server pengembangan:
   ```bash
   php artisan serve
   ```
7. Buka aplikasi di browser dengan URL:
   ```
   http://localhost:8080
   ```

## Struktur Proyek

```
Ujikom-lelang-mobil-antik/
├── app/                # Direktori utama aplikasi
│   ├── Controllers/    # Controller untuk mengelola logika bisnis
│   ├── Models/         # Model untuk berinteraksi dengan database
│   └── Views/          # Template tampilan aplikasi
├── public/             # Folder untuk file publik
├── writable/           # Folder untuk file yang dapat ditulis sistem
├── .env                # File konfigurasi lingkungan
└── composer.json       # File dependensi proyek
```

## Panduan Penggunaan

### Administrator
1. Login sebagai administrator.
2. Tambahkan data mobil antik.
3. Buka proses lelang untuk mobil yang terdaftar.
4. Pantau dan akhiri lelang sesuai kebutuhan.

### Peserta
1. Registrasi sebagai peserta.
2. Login ke aplikasi.
3. Lihat daftar mobil antik yang sedang dilelang.
4. Berikan penawaran untuk mobil pilihan Anda.

## Kontribusi
Kontribusi sangat diapresiasi! Silakan buat pull request atau buka issue di repositori ini.

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---

Jika ada masalah atau pertanyaan, jangan ragu untuk menghubungi pemilik repositori melalui halaman [Issues](https://github.com/Shdhz/Ujikom-lelang-mobil-antik/issues).
