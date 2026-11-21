<div align="center">

# 🚀 Sistem Akademik — Project 5

**Project 5 · PHP OOP + Composer (versi lengkap)**

Versi lanjutan Sistem Akademik OOP dengan autoload Composer, halaman terpisah per entitas, dan alur proses yang lengkap.

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/MySQL-MariaDB-4479A1?logo=mysql&logoColor=white) ![PDO](https://img.shields.io/badge/PDO-database-6C7A89?logo=php&logoColor=white) ![Composer](https://img.shields.io/badge/Composer-PSR--4-885630?logo=composer&logoColor=white) ![License](https://img.shields.io/badge/License-MIT-green.svg) ![Status](https://img.shields.io/badge/status-selesai%20%26%20teruji-brightgreen)

</div>

---

## 📖 Deskripsi

Halaman disusun sebagai file mandiri (`mhsw.php`, `mhsw_input.php`, `mhsw_edit.php`, `mhsw_proses.php`) lalu disertakan lewat `index.php?hal=...`. Model `App\Mahasiswa` berbicara ke database melalui `inc/Koneksi.php`.

## 📸 Tampilan

<table>
  <tr>
    <td width="50%"><img src="docs/screenshots/01-dashboard.png" alt="Dashboard"><br><sub>Dashboard</sub></td>
    <td width="50%"><img src="docs/screenshots/02-mahasiswa.png" alt="Daftar Mahasiswa"><br><sub>Daftar Mahasiswa</sub></td>
  </tr>
  <tr>
    <td width="50%"><img src="docs/screenshots/03-form-input.png" alt="Form Input"><br><sub>Form Input</sub></td>
    <td width="50%"><img src="docs/screenshots/04-dosen.png" alt="Daftar Dosen"><br><sub>Daftar Dosen</sub></td>
  </tr>
</table>

## ✨ Fitur

- 🧩 Autoload PSR-4 (`App\` → `app/`)
- 📋 Daftar mahasiswa
- ➕ Input, ✏️ edit, 🗑️ hapus mahasiswa
- 🔄 Alur proses terpisah di `mhsw_proses.php`
- 👨‍🏫 Dosen & 📚 Matakuliah
- 🎨 Layout di `layouts/`

## 🧱 Teknologi

| Lapisan | Teknologi |
| --- | --- |
| Bahasa | PHP 8.0+ OOP |
| Autoload | Composer PSR-4 |
| Database | MySQL (PDO) |
| Routing | `?hal=` |
| Tampilan | HTML + CSS lokal |

## 🏗️ Arsitektur

```mermaid
flowchart TD
    A[Browser] --> B[index.php?hal=mhsw]
    B --> C[autoload + inc/Koneksi.php]
    C --> D[App\Mahasiswa]
    D --> E[(pbwl_samples_5)]
    B --> F[mhsw.php / mhsw_input.php]
    F --> A
```

## 🚀 Instalasi

1. Import `database.sql` ke `pbwl_samples_5`.
2. Pastikan `vendor/` ada (jalankan `composer install` bila perlu).
3. Buka **http://localhost/project5/**.

## 🗂️ Struktur

```
project5/
├── app/Mahasiswa.php
├── inc/Koneksi.php
├── layouts/
├── vendor/
├── composer.json
├── database.sql
├── index.php
├── mhsw*.php, dosen.php, matkul.php
└── README.md
```

## 🗄️ Database

Database **`pbwl_samples_5`** di MySQL/MariaDB port **3307** (user `root`, password kosong).

File `database.sql` sudah diimpor. Jika perlu import ulang:

```bash
mysql -h 127.0.0.1 -P 3307 -u root pbwl_samples_5 < database.sql
```

> Database lain di XAMPP (termasuk `dbakademik`) sengaja tidak disentuh.

## ✅ Verifikasi

- `/` → 200
- `/index.php?hal=mhsw` → 200
- `/index.php?hal=dosen` → 200

## 🔗 Tautan

- GitHub: https://github.com/Neuron700/project-pbwl-5
- Aplikasi: http://localhost/project5/

## 📄 Lisensi

MIT
