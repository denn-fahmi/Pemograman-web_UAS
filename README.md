Nama : Den Fahmi Satria <p>
Nim  : 312410523 <p>
Kelas: TI.24.A5 <p>
Mata Kuliah: Pemograman Web <p>
# Pemograman-web_UAS
# 🎮 Sistem Informasi Manajemen Rental PS Fahmi
```
rental-ps/
├── app/
│   └── models/
│       ├── Auth.php              # Logika autentikasi login
│       └── PlaystationModel.php  # Logika CRUD data PlayStation
├── config/
│   └── database.php              # Pengaturan koneksi database MySQL
├── public/
│   └── img/                      # Penyimpanan aset gambar unit PS
├── views/
│   ├── layout/
│   │   ├── header.php            # Template bagian atas & CSS Gaming
│   │   └── footer.php            # Template bagian bawah & JS Animasi
│   ├── ps/
│   │   ├── index.php             # Tampilan utama (Admin: Table, User: Card)
│   │   ├── tambah.php            # Form tambah unit (Admin)
│   │   └── ubah.php              # Form edit unit (Admin)
│   └── login.php                 # Halaman utama login
├── index.php                     # Front Controller & Routing Utama
├── logout.php                    # Proses pembersihan session
└── delete.php                    # Proses penghapusan data
```
Sistem ini dirancang untuk mendigitalisasi proses manajemen unit PlayStation dan mempermudah pelanggan dalam melakukan pemesanan melalui antarmuka web yang modern dan responsif.

## Penjelasan Fitur Utama

Berikut adalah detail fungsionalitas sistem yang telah diimplementasikan:

### 1. Sistem Autentikasi Multi-Role
Aplikasi memiliki gerbang masuk (Login) yang membedakan hak akses antara **Admin** dan **User**. 
- **Admin**: Memiliki kontrol penuh atas stok dan inventaris.
- **User**: Hanya dapat melihat katalog dan melakukan pemesanan.

> **[TEMPATKAN GAMBAR: Screenshot Halaman Login dengan Tema Start Game]**
> ![Halaman Login](link_gambar_login_kamu)

---

### 2. Dashboard Admin (Manajemen Inventaris)
Halaman khusus Admin yang didesain menggunakan komponen **Table**. Fitur ini memungkinkan Admin untuk mengelola data dengan cepat.
- **Tambah Unit**: Form input untuk menambah koleksi PS lengkap dengan fitur upload gambar.
- **Ubah Data**: Memperbarui harga, jenis, atau status unit (tersedia/disewa).
- **Hapus Data**: Menghapus unit yang sudah tidak layak pakai atau terjual.

> **[TEMPATKAN GAMBAR: Screenshot Dashboard Admin Versi Tabel]**
> ![Dashboard Admin](link_gambar_admin_kamu)

---

### 3. Katalog Katalog User (Responsive Cards)
Halaman bagi Pelanggan yang menampilkan daftar unit dalam bentuk **Card**.
- **Visual Menarik**: Gambar unit tampil besar untuk menarik minat penyewa.
- **Status Real-time**: Label status otomatis berubah warna (Hijau untuk Tersedia, Merah untuk Disewa).
- **Responsivitas**: Tampilan otomatis menyesuaikan saat dibuka di handphone (Mobile Friendly).

> **[TEMPATKAN GAMBAR: Screenshot Katalog User Versi Card]**
> ![Katalog User](link_gambar_user_kamu)

---

### 4. Filter Pencarian Canggih
Fitur untuk membantu pengguna menemukan unit spesifik tanpa harus mencari satu per satu.
- **Pencarian Nama**: Mencari berdasarkan merk atau nama unit.
- **Filter Kategori**: Menyaring daftar berdasarkan jenis konsol (PS3, PS4, atau PS5).

> **[TEMPATKAN GAMBAR: Screenshot Fitur Filter & Search yang sedang digunakan]**
> ![Fitur Filter](link_gambar_filter_kamu)

---

### 5. Integrasi Pemesanan WhatsApp
Sistem ini memangkas proses transaksi yang rumit dengan menghubungkan pelanggan langsung ke Admin via WhatsApp.
- **Pesan Otomatis**: Saat tombol "Sewa Sekarang" diklik, sistem menyusun teks berisi nama unit, jenis, dan harga secara otomatis.

> **[TEMPATKAN GAMBAR: Screenshot Tampilan Chat WhatsApp yang berisi pesan otomatis dari sistem]**
> ![Integrasi WA](link_gambar_wa_kamu)

---

## Alur Kerja Sistem (Workflow)
1. **Login**: Pengguna masuk ke sistem.
2. **Routing**: `index.php` mengarahkan pengguna ke dashboard sesuai role.
3. **Interaksi**: User mencari unit, Admin mengelola data di database MySQL.
4. **Output**: Informasi ditampilkan melalui template `header.php` dan `footer.php`.

---

## Kebutuhan Sistem (Prerequisites)
- PHP >= 8.0
- MySQL Database
- Web Server (XAMPP / Laragon)
- Koneksi Internet (untuk memuat library Bootstrap via CDN)
