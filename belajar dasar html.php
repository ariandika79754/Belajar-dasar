📚 Materi Dasar Pemrograman dengan HTML

 1. Apa itu HTML?

HTML (HyperText Markup Language) adalah bahasa markah standar untuk membuat halaman web.
HTML digunakan untuk menyusun struktur konten pada web seperti teks, gambar, tautan, tabel, dan lain-lain.



 2. Struktur Dasar HTML

html
<!DOCTYPE html>
<html>
<head>
  <title>Judul Halaman</title>
</head>
<body>
  <h1>Halo, Dunia!</h1>
  <p>Ini adalah paragraf epertama saya.</p>
</body>
</html>


📌 Penjelasan:

* <!DOCTYPE html>: Menyatakan bahwa ini adalah dokumen HTML5.
* <html>: Elemen root dari dokumen.
* <head>: Bagian informasi (tidak ditampilkan di halaman).
* <title>: Judul yang muncul di tab browser.
* <body>: Isi utama halaman web (yang ditampilkan).



 3. Elemen Teks Dasar

| Elemen               | Fungsi                                                     |
| -------------------- | ---------------------------------------------------------- |
| <h1> hingga <h6>     | Judul, dari paling besar (<h1>) ke paling kecil (<h6>) |
| <p>                  | Paragraf                                                   |
| <br>                 | Ganti baris                                                |
| <hr>                 | Garis horizontal                                           |
| <strong>             | Teks tebal                                                 |
| <em>                 | Teks miring                                                |



 4. Tautan dan Gambar

html
<a href="https://www.google.com">Kunjungi Google</a>

<img src="gambar.jpg" alt="Deskripsi gambar" width="300" />


📌 Keterangan:

* <a href="URL">: Membuat hyperlink.
* <img src="..." alt="...">: Menampilkan gambar.



 5. Daftar (List)

html
<ul>
  <li>Item daftar tak berurutan</li>
  <li>Contoh kedua</li>
</ul>

<ol>
  <li>Item daftar terurut</li>
  <li>Item kedua</li>
</ol>




 6. Tabel

html
<table border="1">
  <tr>
    <th>Nama</th>
    <th>Umur</th>
  </tr>
  <tr>
    <td>Ari</td>
    <td>21</td>
  </tr>
</table>




 7. Formulir (Form)

html
<form action="proses.php" method="POST">
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" />
  
  <br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" />

  <br><br>

  <input type="submit" value="Kirim" />
</form>




 8. Komentar HTML

html
<!-- Ini adalah komentar -->




 9. Tag Khusus

* <div>: Kontainer blok (bisa untuk layout).
* <span>: Kontainer inline (untuk styling kecil).
* <iframe>: Menyisipkan halaman web lain.
* <video> & <audio>: Menampilkan media.



 10. Tips Praktik Belajar HTML

✅ Gunakan Visual Studio Code (VS Code) atau Notepad++
✅ Simpan file dengan ekstensi .html
✅ Buka dengan browser (klik dua kali file HTML)
✅ Pelajari juga CSS dan JavaScript setelah menguasai HTML



 📦 Bonus: Template HTML Sederhana


11. Penggunaan CSS di HTML
HTML bisa dikombinasikan dengan CSS untuk memperindah tampilan halaman web.

🔹 3 Cara Menyisipkan CSS:
a. Inline CSS

html
Salin
Edit
<p style="color: blue;">Teks ini berwarna biru</p>
b. Internal CSS

html
Salin
Edit
<head>
  <style>
    body {
      background-color: #f0f0f0;
    }
    h1 {
      color: green;
    }
  </style>
</head>
c. Eksternal CSS

html
Salin
Edit
<!-- File HTML -->
<link rel="stylesheet" href="style.css">
css
Salin
Edit
/* File style.css */
p {
  font-size: 18px;
}
12. Media Responsif
Gunakan properti width="100%" atau media queries CSS agar gambar dan layout menyesuaikan layar.

html
Salin
Edit
<img src="gambar.jpg" alt="Contoh" style="width: 100%; max-width: 400px;">
13. Membuat Navigasi Sederhana
html
Salin
Edit
<nav>
  <a href="#beranda">Beranda</a> |
  <a href="#tentang">Tentang</a> |
  <a href="#kontak">Kontak</a>
</nav>
14. Menyisipkan Video dan Audio
html
Salin
Edit
<video width="320" height="240" controls>
  <source src="video.mp4" type="video/mp4">
  Browser Anda tidak mendukung video tag.
</video>

<audio controls>
  <source src="audio.mp3" type="audio/mpeg">
  Browser Anda tidak mendukung audio tag.
</audio>
15. Membuat Layout Dasar dengan <div>
html
Salin
Edit
<div style="width: 100%; background-color: lightblue;">
  <h2>Header</h2>
</div>

<div style="display: flex;">
  <div style="width: 70%; background-color: #eee;">Konten Utama</div>
  <div style="width: 30%; background-color: #ccc;">Sidebar</div>
</div>

<div style="background-color: lightgray;">
  <p>Footer</p>
</div>
16. Favicon (Ikon di Tab Browser)
Tambahkan di bagian <head>:

html
Salin
Edit
<link rel="icon" type="image/png" href="favicon.png">
17. HTML Entities (Karakter Khusus)
Karakter	Entity	Hasil
&lt;	<	<
&gt;	>	>
&amp;	&	&
&quot;	"	"
&copy;		©

18. Metatag Penting di <head>
html
Salin
Edit
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Website portofolio Ari Andika">
19. Validasi HTML
Gunakan W3C HTML Validator untuk mengecek apakah struktur HTML kamu valid.

20. Proyek Latihan untuk Pemula
✅ Buat halaman profil diri.

✅ Buat halaman daftar produk sederhana.

✅ Buat form kontak lengkap (nama, email, pesan).

✅ Buat layout halaman web menggunakan <div>.

✅ Buat website sederhana dengan 3 halaman: Beranda, Tentang, dan Kontak.