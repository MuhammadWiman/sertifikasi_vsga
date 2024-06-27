## Pemesanan Menu Es teh dengan PHP (XAMPP)

Ini adalah program sederhana pemesanan paket wisata menggunakan PHP dan json untuk XAMPP. Program ini memungkinkan pengguna untuk melakukan pemesanan menu Es Teh dengan berbagai opsi.

1. [Daftar Isi](#daftar-isi)
2. [Instalasi](#instalasi)
3. [Konfigurasi](#konfigurasi)
4. [Struktur Direktori](#struktur-direktori)
5. [Menjalankan Program](#menjalankan-program)
6. [Fitur](#fitur)
7. [Teknologi yang Digunakan](#teknologi-yang-digunakan)
8. [Catatan Penting](#catatan-penting)
9. [Kontribusi](#kontribusi)

## Instalasi

Langkah-langkah instalasi program :
Clone repositori ini ke direktori lokal Anda atau unduh file ZIP.

```sh

```

Pindahkan atau salin folder ini ke dalam direktori XAMPP (htdocs).

## Konfigurasi

Konfigurasi basis data:
Import database yang disediakan ke dalam MySQL menggunakan phpMyAdmin atau alat manajemen database lainnya seperti json.

Sesuaikan file konfigurasi basis data di ./database/pemesanan.json dengan pengaturan basis data lokal Anda sebagai contoh:

```sh
   [
    {
        "nama": "wiman",
        "notelp": "22",
        "alamat": "2222",
        "jenis_teh": "Es Teh Rasa Lemon (Rp. 5.000)",
        "jumlah_teh": "2",
        "harga_teh": "Rp. 5.000",
        "jumlah_tagihan": "Rp. 10.000"
    }
   ]
```

## Struktur Direktori

Penjelasan singkat tentang struktur direktori program.

```sh
/parawisata
├── database/ # Direktori berisi skrip database dan koneksi
│ ├── pemesanan.json
│ ├──
│ └── ...
├── page/ # Direktori berisi halaman PHP
│ ├── riwayat.php # Halaman admin
│ ├── pemesanan.php # Halaman pemesanan
│ ├── submit_pesan.php # Halaman submit pemesanan
│ └── ...
├── .gitignore # Berkas untuk mengabaikan file dalam Git
├── index.php # Berkas utama untuk routing
├── README.md # Ini sendiri
└── ...
```

## Menjalankan Program

1. Pastikan XAMPP telah dijalankan dan layanan Apache dan MySQL aktif.
2. Buka browser dan navigasikan ke http://localhost/sertifikasi/ untuk memulai aplikasi.

## Struktur url endpoint

Berikut url endpoint pada website ini :

```sh
#Halaman Home
http://localhost/sertifikasi

#halaman pemesanan
http://localhost/sertifikasi/pemesanan

#halaman Riwayat Pemesanan
http://localhost/sertigikasi/riwayat
```

## Fitur

Deskripsi singkat tentang fitur-fitur utama program:

1. Pemesanan Menu Es teh.
2. Pengelolaan data pemesanan oleh admin.
3. Form pemesanan dengan validasi input.

## Teknologi yang Digunakan

1. PHP versi 8.2.12

2. HTML
3. CSS (Bootstrap) versi 5.0.2
4. JavaScript (jQuery) versi 3.6.0

## Catatan Penting

Catatan atau hal-hal yang perlu diperhatikan pengguna atau pengembang:

Pastikan koneksi internet tidak terputus saat menggunakan program ini.
Periksa kembali konfigurasi basis data sebelum menjalankan program.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request dengan perubahan yang diusulkan.
"# sertifikasi_vsga" 
