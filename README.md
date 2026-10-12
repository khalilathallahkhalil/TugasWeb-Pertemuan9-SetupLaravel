# Tugas Web Pertemuan 9 - Setup Laravel

## Deskripsi
Proyek ini merupakan tugas praktikum pengembangan web yang berfokus pada setup dan konfigurasi awal framework Laravel.

## Teknologi yang Digunakan
- **Laravel**: Framework PHP untuk pengembangan aplikasi web.
- **PHP**: Bahasa pemrograman untuk pengembangan web.
- **Composer**: Dependency manager untuk PHP.
- **MySQL**: Sistem manajemen basis data jika digunakan dalam proyek.

## Fitur
- Setup awal proyek Laravel.
- Penggunaan struktur dasar Laravel.
- Konfigurasi lingkungan pengembangan.
- Persiapan aplikasi web menggunakan Laravel.

## Struktur Folder

```text
TugasWeb-Pertemuan9-SetupLaravel/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── home.blade.php
│       ├── about.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── vite.config.js
```

## Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/khalilathallahkhalil/TugasWeb-Pertemuan9-SetupLaravel.git
```

### 2. Masuk ke Folder Proyek
```bash
cd TugasWeb-Pertemuan9-SetupLaravel
```

### 3. Instal Dependensi
```bash
composer install
```

### 4. Konfigurasi Environment
```bash
cp .env.example .env
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Jalankan Server
```bash
php artisan serve
```

Buka aplikasi melalui alamat berikut:

`http://127.0.0.1:8000`

