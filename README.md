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

```bash
composer install