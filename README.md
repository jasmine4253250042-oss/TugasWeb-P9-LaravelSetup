# Tugas Web P9 - Laravel Setup

Project ini dibuat untuk memenuhi tugas praktikum Laravel Setup.

## Identitas

- Nama: Jasmine Azzahra Alamsyah
- Jurusan: Ilmu Komputer
- Semester: 3

## Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- Composer
- Blade

## Fitur

Project ini memiliki beberapa halaman:

- Home
- About
- Contact

Halaman Home menampilkan data mahasiswa secara dinamis melalui Controller.

## Routing

| URL | Halaman |
|---|---|
| `/` | Home |
| `/about` | About |
| `/contact` | Contact |

## Database

Database yang digunakan adalah:

`tugas_p9`

Database dikonfigurasi menggunakan MySQL melalui file `.env`.

## Controller dan Model

Controller yang digunakan:

`PageController`

Model yang dibuat:

`Mahasiswa`

## Cara Menjalankan Project

1. Buka folder project Laravel.

2. Install dependency dengan perintah:

    composer install

3. Atur konfigurasi database pada file `.env`.

4. Jalankan migration:

    php artisan migrate

5. Jalankan server Laravel:

    php artisan serve

6. Buka browser dan akses:

    http://127.0.0.1:8000

## Struktur Folder

Struktur folder utama pada project Laravel ini adalah:

    TugasWeb-P9-LaravelSetup/
    ├── app/
    │   ├── Http/
    │   │   └── Controllers/
    │   │       └── PageController.php
    │   └── Models/
    │       └── Mahasiswa.php
    ├── database/
    │   └── migrations/
    ├── resources/
    │   └── views/
    │       ├── home.blade.php
    │       ├── about.blade.php
    │       └── contact.blade.php
    ├── routes/
    │   └── web.php
    ├── public/
    ├── config/
    ├── storage/
    ├── tests/
    ├── .env
    ├── artisan
    ├── composer.json
    └── README.md

### Penjelasan Struktur Folder

- **app/** → berisi kode utama aplikasi seperti Controller dan Model.
- **database/** → berisi migration dan file yang berhubungan dengan database.
- **resources/views/** → berisi halaman Blade seperti Home, About, dan Contact.
- **routes/** → berisi pengaturan routing aplikasi.
- **public/** → berisi file yang dapat diakses secara publik.
- **config/** → berisi konfigurasi Laravel.
- **storage/** → digunakan untuk menyimpan file dan data yang dihasilkan aplikasi.
- **tests/** → berisi file untuk pengujian aplikasi.

## Author

Jasmine Azzahra Alamsyah