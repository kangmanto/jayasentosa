## Tentang Aplikasi
dokumentasi pribadi

Aplikasi POS atau point of sales adalah aplikasi yang digunakan untuk mengelola transaksi pada sebuah toko atau oleh kasir. Aplikasi ini dibuat menggunakan Laravel v8.* dan minimal PHP v7.4

### Beberapa Fitur yang tersedia:
- Manajemen Kategori Produk
- Manajemen Produk
  - Multiple Delete
  - Cetak Barcode
- Manajemen Member atau Anggota
  - Cetak Kartu Member
- Manajemen Supplier
- Transaksi Pengeluaran
- Transaksi Pembelian
- Transaksi Penjualan
- Laporan Pendapatan atau Laba & Rugi
  - Bulanan
  - Harian
  - Custom Tanggal
- Custom Tipe Nota
  - Nota Besar
  - Nota Kecil / Thermal Nota
- Manajemen User dan Profil
- Pengaturan Toko
  - Identitas
  - Upload Desain Kartu Member
  - Setting Diskon Member
- User (Administrator, Kasir)
- Grafik ChartJS pada Dashboard

## Instalasi
#### Via Git
```bash
git clone https://github.com/kangmanto/jayasentosa.git
```
### Setup Aplikasi

```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Generate key
```bash
php artisan key:generate
```
Migrate database
```bash
php artisan migrate
```
Seeder table User, Pengaturan
```bash
php artisan db:seed
```
Menjalankan aplikasi
```bash
php artisan serve
```
