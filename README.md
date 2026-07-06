NAMA   : INDINA WIQOYATUSSABILAH
NIM    : 101230029
KELAS  : TF23C

**Desa Depok, Kecamatan Kandeman, Kabupaten Batang**

Website pemasaran UMKM berbasis web untuk memperkenalkan produk lokal Desa Depok dan memfasilitasi pemesanan melalui WhatsApp.

Repository: https://github.com/INDINA03/Pemasaran-UMKM-Desa-Depok-Berbasis-Web

---

## Ringkasan

Aplikasi ini menghadirkan sistem pemasaran digital sederhana untuk UMKM lokal dengan:
- Halaman katalog produk dan informasi desa
- Login dan registrasi admin
- Manajemen produk dan UMKM
- Laporan cetak dan export CSV
- Order via WhatsApp

---

## Tech Stack

| Teknologi | Deskripsi |
|-----------|-----------|
| HTML5 | Struktur halaman statis |
| CSS3 | Styling halaman dan layout |
| JavaScript (Vanilla) | CRUD, pencarian, autentikasi dasar, localStorage |
| PHP | File backend minimal (`database.php`) untuk koneksi database |
| MySQL | Basis data yang direncanakan untuk backend |
| localStorage | Penyimpanan data sementara di browser |
| Font Awesome | Ikon UI |
| Google Fonts (Poppins) | Tipografi modern |

---

## Fitur Utama

### Publik
- `index.html` / `beranda.html`: Landing page, statistik produk/UMKM/kategori, daftar produk
- `tentang.html`: Profil desa, visi-misi, dan misi program
- `kontak.html`: Informasi kontak dan form pesan
- Pencarian produk realtime berdasarkan nama, UMKM, atau deskripsi
- Tombol WhatsApp untuk memudahkan pemesanan

### Autentikasi
- `login.html`: Login admin dengan username/password
- `register.html`: Registrasi admin dengan validasi input

### Admin
- `dashboard.html`: Ringkasan statistik total produk, UMKM, dan kategori
- `admin.html`: CRUD produk (tambah, edit, hapus, gambar base64)
- `kelola_umkm.html`: CRUD data UMKM
- `laporan.html`: Filter, cetak, dan ekspor laporan CSV

---

## Struktur Data (localStorage)

| Key | Konten | Digunakan di |
|-----|--------|--------------|
| `umkm_products` | Data produk UMKM | Halaman publik + admin |
| `umkm_list` | Daftar UMKM | Halaman admin + laporan |
| `umkm_users` | Data pengguna/admin | Login, register |
| `admin_logged_in` | Status login | Proteksi halaman admin |
| `admin_username` | Nama pengguna aktif | Menampilkan info admin |

---

## Instalasi dan Jalankan

1. Clone repo ke `C:\xampp\htdocs\`
2. Jalankan Apache di XAMPP
3. Buka browser dan akses:
   `http://localhost/Sistem Informasi Pemasaran UMKM Berbasis Web/`
4. Gunakan login default jika diperlukan:
   - Username: `admin`
   - Password: `admin123`

> Jika ingin mengaktifkan backend PHP/MySQL, sesuaikan konfigurasi di `database.php` dan siapkan database MySQL.

---

## Catatan Pengembangan

- Frontend utama sudah berfungsi sebagai aplikasi static berbasis browser
- Backend PHP/MySQL disiapkan tetapi belum terhubung penuh
- Autentikasi saat ini menggunakan `localStorage`, belum menggunakan session server
- Manajemen kategori belum dibuat secara dinamis
- Sistem role masih sederhana; semua pengguna terdaftar dianggap admin

---

## Struktur File Utama

- `index.html`, `beranda.html`, `tentang.html`, `kontak.html`
- `login.html`, `register.html`
- `dashboard.html`, `admin.html`, `kelola_umkm.html`, `laporan.html`
- `style.css`, `database.php`, `products.php`

---

## Lisensi

&copy; 2026 Pemerintah Desa Depok, Kecamatan Kandeman, Kabupaten Batang.
