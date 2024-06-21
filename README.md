    APLIKASI FURNITURE BERBASIS WEBSITE
------------------------------------------------------
<a href="https://msib-6-penjualan-barang-03.educalab.id"> Demo Website </a>
------------------------------------------------------
Quick Use
------------------------------------------------------
- clone this repository
- composer update
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- npm install
- npm run dev / npm run build && php artisan serve
-------------------------------------------------------
Deskripsi
-------------------------------------------------------
Aplikasi Furniture Berbasis Website ini dibuat oleh
Kelompok 1 Kelas Fullstack 2 Yang terdiri dari :
- <a href='https://linkedin.com/in/oliverkore'>Oliver Dillon</a> -> (Leader, Project Manajer, Fullstack)
- Abdullah Ali -> (Backend)
- Muhammad Farid -> (Frontend)
- Habib Andriantito -> (Backend)
- Dwi Ricky S -> (FrontEnd)
- Untuk Capstone Project dan presentasi di <a href='https://gamelab.id'>gamelab.id</a>
  Studi Independen batch 6 pada tanggal 19 Juni 2024
--------------------------------------------------------
Fitur
--------------------------------------------------------
1. Guest
   - Melihat Landing Page, Produk, Promo, Tentang Kami
     FAQ, Register, Login, Reset Password
2. Pengguna (User)
   - Melakukan Verifikasi Email, Melakukan Transaksi,
     Mengupdate Data Profil, dan Melihat Detail Transaksi
3. Admin
   - Melihat Dashboard, Manajemen Produk dan Promo
4. Super Admin
   - Manajemen Kategori dan Memonitor Transaksi, Mengupdate status transaksi
--------------------------------------------------------
Revisi
--------------------------------------------------------
1. Jika stock barang tinggal 1 dan terdapat user yang memasukkan ke keranjang, maka stock akan berkurang dan status akan berganti
2. Jika dalam 2 jam setelah user menambahkan ke keranjang tidak kunjung checkout, keranjang akan kosong dan jumlah produk akan direstock
--------------------------------------------------------
Bugs
--------------------------------------------------------
- No Bugs found
--------------------------------------------------------
Testing
--------------------------------------------------------
- Belum test multiple acc / session untuk keranjang
--------------------------------------------------------
