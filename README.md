## Tentang Aplikasi
POS untuk toko ATK
menggunakan Laravel v8.* 
minimal PHP v7.4

### Fitur :
- Penjualan Jenis Ecer dan Grosir
  
- Manajemen Kategori Produk
- Manajemen Produk
- Manajemen Member
- Manajemen Supplier
- Manajemen User dan Profil
  
- Transaksi Pengeluaran
- Transaksi Pembelian
- Transaksi Penjualan
  
- Laporan
- Cetak Nota

- Multi User || Administrator, Kasir
  
- Grafik

## terminal/prompt/cmd
Cloning dari Github atau download file.zip

```bash
git clone https://github.com/kangmanto/jayasentosa.git
```
jika menggunakan xampp temukan 
```bash
;extension=zip
```
temukan file php.ini hilangkan ; atau ubah menjadi 
```bash
extension=zip 
```
jalankan composer install

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
Menjalankan Seeder
```bash
php artisan db:seed
```
Menjalankan aplikasi
```bash
php artisan serve
```
