# NOJ POS - Sistem Penjualan, Penagihan, dan Manajemen Inventaris

Delta POS adalah aplikasi berbasis web untuk membantu usaha Anda dalam mengelola penjualan, penagihan, inventaris, dan CRM dengan mudah dan efisien. Aplikasi ini dirancang untuk UKM, toko retail, dan bisnis lain yang ingin mengotomatiskan proses kasir dan manajemen produk.

---

## Fitur Utama

- **Penjualan & Kasir**
  - Buat dan cetak faktur penjualan
  - Kelola berbagai metode pembayaran (tunai, kartu, transfer)
  - Diskon produk dan promo
  - Multi user dan hak akses kasir

- **Manajemen Inventaris**
  - Kelola produk dan stok barang secara real-time
  - Peringatan stok menipis
  - Kelola supplier dan pembelian barang
  - Laporan stok dan penjualan

- **CRM (Customer Relationship Management)**
  - Kelola data pelanggan
  - Riwayat transaksi pelanggan
  - Target dan reward pelanggan

- **Laporan Lengkap**
  - Laporan penjualan harian, bulanan, dan tahunan
  - Laporan laba rugi
  - Laporan pajak dan GST (jika berlaku)

- **Pengaturan Lengkap**
  - Multi toko dan cabang
  - Hak akses pengguna dan role management
  - Backup dan restore database

---

## Teknologi yang Digunakan

- Laravel (PHP Framework)
- MySQL sebagai basis data
- Tailwind CSS untuk UI
- Vue.js (opsional, jika ada bagian interaktif)
- Docker / Laravel Sail (opsional untuk development environment)

---

## Instalasi

1. Clone repository ini

   ```bash
   git clone https://github.com/username/repo.git
   cd repo
````

2. Install dependencies

   ```bash
   composer install
   npm install
   npm run dev
   ```

3. Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Jalankan migrasi dan seed database

   ```bash
   php artisan migrate --seed
   ```

5. Jalankan aplikasi

   ```bash
   php artisan serve
   ```

---

## Cara Penggunaan

* Akses aplikasi di `http://localhost:8000`
* Login menggunakan akun admin (buat saat seed database atau register)
* Mulai tambah produk, kelola stok, dan lakukan penjualan

---

## Kontribusi

Kontribusi sangat diterima. Silakan buat pull request atau laporkan isu jika menemukan bug.

---

## Lisensi

Proyek ini menggunakan lisensi MIT. Silakan lihat file LICENSE untuk detail.

---

## Kontak

Untuk pertanyaan dan dukungan, silakan hubungi:

* Email: [your.email@example.com](mailto:your.email@example.com)
* GitHub: [https://github.com/username](https://github.com/username)

---

Terima kasih sudah menggunakan NOJ POS! 🚀

```
