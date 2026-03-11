# 🐾 Anabulcom – Web untuk Pusat Layanan Hewan

![Laravel](https://img.shields.io/badge/Laravel-Framework-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-Backend-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Frontend-F7DF1E?logo=javascript&logoColor=black)
![License](https://img.shields.io/badge/License-MIT-yellow)

Anabulcom adalah sistem informasi dan reservasi berbasis web yang dirancang untuk mendukung pusat layanan hewan berbasis UMKM dalam mengelola layanan seperti grooming, hotel kucing, dan konsultasi dokter hewan secara digital.

Sistem ini membantu meningkatkan efisiensi operasional sekaligus memudahkan pelanggan dalam mengakses layanan dan mengelola reservasi secara online.

---

## 📸 Tampilan Aplikasi

### Halaman Utama (Homepage)
![Homepage](images/homepage.png)
Halaman utama Anabulcom dengan tagline *"One Stop Destination for Cat Lovers"* dan tombol **Shop Now**.

### Halaman Layanan – Cat Grooming Center
![Grooming](images/grooming.png)
Halaman layanan grooming lengkap dengan banner dan tombol *Book Now*.

### Halaman Layanan – Premium Cat Hotel
![Hotel](images/hotel.png)
Halaman layanan cat hotel dengan informasi penginapan premium untuk kucing.

### Halaman Layanan – Dokter Hewan / Vets
![Dokter](images/dokter.png)
Halaman layanan dokter hewan dengan fitur pemesanan konsultasi.

### Halaman Produk (User)
![Produk User](images/produk_user.png)
Halaman produk untuk pengguna. Menampilkan pesan *"Produk belum tersedia"* jika belum ada produk.

### Halaman Booking
![Booking](images/booking.png)
Halaman reservasi dengan pilihan layanan dan fitur cek status reservasi menggunakan kode reservasi.

### Form Reservasi Grooming
![Form Grooming](images/form_grooming.png)
Form reservasi grooming dengan input nama owner, nama anabul, jenis grooming, tipe bulu, tanggal, dan jam.

### Cek Status Reservasi
![Cek Status](images/cek_status.png)
Fitur pencarian status reservasi berdasarkan kode unik yang diberikan saat pemesanan.

---

### Dashboard Admin – List Produk
![List Produk](images/admin_list_produk.png)
Halaman daftar produk pada panel admin.

### Dashboard Admin – Input Produk Baru
![Input Produk](images/admin_input_produk.png)
Form penambahan produk baru dengan field nama produk, harga, link produk (Shopee), dan upload gambar.

### Dashboard Admin – Menunggu / Reservasi Grooming
![Menunggu Grooming](images/admin_menunggu_grooming.png)
Daftar reservasi grooming yang menunggu persetujuan admin, lengkap dengan tombol approve (✔) dan tolak (🚫).

### Dashboard Admin – Menunggu / Reservasi Dokter
![Menunggu Dokter](images/admin_menunggu_dokter.png)
Daftar reservasi dokter hewan yang menunggu persetujuan, dengan informasi tanggal, sesi, dan keluhan.

### Dashboard Admin – Menunggu / Reservasi Hotel
![Menunggu Hotel](images/admin_menunggu_hotel.png)
Daftar reservasi hotel kucing yang menunggu persetujuan, beserta informasi pengantaran dan penjemputan.

### Dashboard Admin – Disetujui / Reservasi Grooming
![Disetujui Grooming](images/admin_disetujui_grooming.png)
Daftar reservasi grooming yang telah disetujui, dengan tombol **Selesai** untuk menandai selesai.

### Dashboard Admin – Disetujui / Reservasi Dokter
![Disetujui Dokter](images/admin_disetujui_dokter.png)
Daftar reservasi dokter hewan yang telah disetujui.

### Dashboard Admin – Disetujui / Reservasi Hotel
![Disetujui Hotel](images/admin_disetujui_hotel.png)
Daftar reservasi hotel kucing yang telah disetujui beserta detail kamar, pengantaran, dan penjemputan.

---

## 📌 Fitur

### 👩‍💼 Fitur Admin
- Mengelola data produk (tambah, lihat, input baru)
- Mengelola reservasi grooming, hotel kucing, dan dokter hewan
- Menyetujui atau menolak reservasi yang masuk
- Menandai reservasi yang telah selesai
- Melihat riwayat reservasi

### 👤 Fitur Pengguna
- Melihat informasi tentang Anabulcom dan layanan yang tersedia
- Melakukan reservasi online (grooming, hotel kucing, dokter)
- Menerima kode reservasi unik setelah pemesanan
- Mengecek status reservasi menggunakan kode reservasi
- Melihat produk yang tersedia (terintegrasi dengan Shopee)

---

## 🛠️ Tech Stack

- PHP (Laravel Framework)
- HTML
- CSS
- JavaScript
- MySQL Database

---

## ⚙️ Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/your-username/anabulcom.git
cd anabulcom
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Konfigurasi Environment
Salin `.env.example` ke `.env` dan atur konfigurasi database:
```bash
cp .env.example .env
php artisan key:generate
```

Edit konfigurasi database di `.env`:
```env
DB_DATABASE=nama_database
DB_USERNAME=username_database
DB_PASSWORD=password_database
```

---

## 🗃️ Migrasi Database
```bash
php artisan migrate
```

---

## ▶️ Jalankan Aplikasi
```bash
php artisan serve
```

Buka di browser:
```
http://127.0.0.1:8000/
```

---

## 📁 Struktur Halaman

| URL | Halaman |
|-----|---------|
| `/` | Homepage |
| `/grooming` | Layanan Grooming |
| `/hotel` | Layanan Cat Hotel |
| `/dokter` | Layanan Dokter Hewan |
| `/product` | Halaman Produk |
| `/booking` | Halaman Reservasi |
| `/reservasi_grooming` | Form Reservasi Grooming |
| `/list_produk` | Admin – List Produk |
| `/input_produk` | Admin – Input Produk Baru |
| `/menunggu_grooming` | Admin – Reservasi Grooming (Menunggu) |
| `/menunggu_dokter` | Admin – Reservasi Dokter (Menunggu) |
| `/menunggu_hotel` | Admin – Reservasi Hotel (Menunggu) |
| `/disetujui_grooming` | Admin – Reservasi Grooming (Disetujui) |
| `/disetujui_dokter` | Admin – Reservasi Dokter (Disetujui) |
| `/disetujui_hotel` | Admin – Reservasi Hotel (Disetujui) |

---

## 📜 Lisensi

Proyek ini dikembangkan untuk keperluan edukasi dan portofolio.

## 🙋 Author 
Made by [adin-alxndr](https://github.com/adin-alxndr/)
