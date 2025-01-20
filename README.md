<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Belajar Laravel 11 - Inventaris

Repository ini berisi proyek aplikasi inventaris sederhana menggunakan framework **Laravel 11**. 

## Fitur
- Manajemen inventaris
- CRUD untuk item dan kategori
- Migrasi database bawaan Laravel

## Prasyarat
Sebelum menjalankan proyek ini, pastikan perangkat Anda sudah terinstall:

1. **Composer**: [Unduh dan Install Composer](https://getcomposer.org/download/)
2. **PHP**: Versi 8.1 atau lebih baru.
3. **Database**: MySQL atau MariaDB.
4. **XAMPP** atau **Laragon** (pilih salah satu untuk server lokal).

## Cara Menjalankan Proyek

### Langkah 1: Clone Repository atau Unduh ZIP
- **Clone menggunakan Git**:
  ```bash
  git clone https://github.com/riosaputraduha/belajar-laravel-11-inventaris.git
  ```
- **Unduh ZIP**:
  - Klik tombol "Code" di halaman repo.
  - Pilih **Download ZIP** dan ekstrak file tersebut.

### Langkah 2: Pindahkan Folder Proyek
- Untuk pengguna **XAMPP**: Pindahkan folder proyek ke `xampp/htdocs/`.
- Untuk pengguna **Laragon**: Pindahkan folder proyek ke `laragon/www/`.

### Langkah 3: Install Dependencies
Buka terminal dan navigasikan ke folder proyek:
```bash
cd <nama-folder-proyek>
composer install
```

### Langkah 4: Konfigurasi File Environment
- Salin file `.env.example` menjadi `.env`:
  ```bash
  cp .env.example .env
  ```
- Sesuaikan konfigurasi database di file `.env`:
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=laravel_db
  DB_USERNAME=root
  DB_PASSWORD=
  ```

### Langkah 5: Buat Database
1. Buka **phpMyAdmin** melalui browser:
   - **XAMPP**: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - **Laragon**: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Buat database baru sesuai dengan nama di file `.env`, contoh: `laravel_db`.

### Langkah 6: Migrasi Database
Jalankan perintah berikut untuk membuat tabel di database:
```bash
php artisan migrate
```

### Langkah 7: Generate Key Aplikasi
Jalankan perintah berikut:
```bash
php artisan key:generate
```

### Langkah 8: Jalankan Server Lokal
- Untuk **XAMPP**:
  - Gunakan perintah:
    ```bash
    php artisan serve
    ```
  - Akses aplikasi di: [http://127.0.0.1:8000](http://127.0.0.1:8000).
- Untuk **Laragon**:
  - Akses URL otomatis yang dihasilkan, seperti: [http://belajar-laravel-11-inventaris.test](http://belajar-laravel-11-inventaris.test).

## Catatan Penting
- Pastikan versi PHP Anda kompatibel dengan Laravel 11 (minimal PHP 8.1).
- Jika terdapat error, pastikan semua dependensi terinstall dengan benar dan konfigurasi `.env` sudah sesuai.

## Lisensi
Proyek ini menggunakan lisensi **MIT**. Silakan gunakan dan modifikasi sesuai kebutuhan.

---

Happy coding! 😊
