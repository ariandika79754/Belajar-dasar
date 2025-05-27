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

html
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Portfolio Sederhana</title>
</head>
<body>
  <h1>Selamat Datang di Portofolio Saya</h1>
  <p>Nama: Ari Andika</p>
  <p>Email: andikaari406@gmail.com</p>
  <a href="https://github.com/ariandika79754">Github Saya</a>
</body>
</html>
