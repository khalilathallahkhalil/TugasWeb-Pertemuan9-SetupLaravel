Tugas Web Pertemuan 9 — Setup Laravel

1. Deskripsi Proyek

Proyek ini merupakan aplikasi web sederhana yang dibuat menggunakan framework Laravel. Aplikasi ini bertujuan untuk mempelajari konsep dasar routing, controller, Blade Template, serta penggunaan Tailwind CSS dalam pengembangan antarmuka web.

2. Teknologi yang Digunakan

- Laravel 13 — Framework pengembangan aplikasi web.
- PHP — Bahasa pemrograman backend.
- Blade Template — Mengelola tampilan halaman web.
- Tailwind CSS — Mengatur desain dan tata letak halaman.
- Vite — Mengelola aset frontend.
- Composer — Mengelola dependensi PHP.
- Node.js dan npm — Mengelola dependensi frontend.
- SQLite — Sistem basis data.

3. Fitur Aplikasi

- Home: Menampilkan halaman utama dan daftar keahlian.
- About: Menampilkan informasi nama dan kelas.
- Contact: Menampilkan informasi email dan nomor telepon.
- Navigasi: Memungkinkan pengguna berpindah antarhalaman.
- Route Parameter: Menampilkan pesan sapaan berdasarkan nama yang dimasukkan melalui URL.

4. Struktur Folder

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

5. Cara Instalasi

Prasyarat

Pastikan PHP, Composer, Node.js, npm, dan Git sudah terpasang.

Langkah 1: Clone Repository

git clone https://github.com/khalilathallahkhalil/TugasWeb-Pertemuan9-SetupLaravel.git
cd TugasWeb-Pertemuan9-SetupLaravel

Langkah 2: Instal Dependensi

composer install
npm install

Langkah 3: Konfigurasi Environment

Salin ".env.example" menjadi ".env".

Windows CMD:

copy .env.example .env

Linux/macOS:

cp .env.example .env

Buat application key:

php artisan key:generate

Langkah 4: Konfigurasi Database

Jika menggunakan SQLite, buat file database apabila belum tersedia, lalu jalankan:

php artisan migrate

Langkah 5: Build Aset Frontend

npm run build

Langkah 6: Jalankan Aplikasi

php artisan serve

Buka browser dan akses:

"http://127.0.0.1:8000"

6. Daftar Route

URL| Fungsi
"/"| Halaman Home
"/about"| Halaman About
"/contact"| Halaman Contact
"/hello/{nama}"| Pesan sapaan berdasarkan nama

Repository

https://github.com/khalilathallahkhalil/TugasWeb-Pertemuan9-SetupLaravel
