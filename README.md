<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
</head>
<body>

<h1>📚 Materi Dasar Pemrograman dengan HTML</h1>

<h2>1. Apa itu HTML?</h2>
<p>HTML (HyperText Markup Language) adalah bahasa markah standar untuk membuat halaman web.</p>
<p>HTML digunakan untuk menyusun struktur konten pada web seperti teks, gambar, tautan, tabel, dan lain-lain.</p>

<h2>2. Struktur Dasar HTML</h2>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;title&gt;Judul Halaman&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;h1&gt;Halo, Dunia!&lt;/h1&gt;
  &lt;p&gt;Ini adalah paragraf pertama saya.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<p><strong>Penjelasan:</strong></p>
<ul>
  <li><code>&lt;!DOCTYPE html&gt;</code>: Menyatakan bahwa ini adalah dokumen HTML5.</li>
  <li><code>&lt;html&gt;</code>: Elemen root dari dokumen.</li>
  <li><code>&lt;head&gt;</code>: Bagian informasi (tidak ditampilkan di halaman).</li>
  <li><code>&lt;title&gt;</code>: Judul yang muncul di tab browser.</li>
  <li><code>&lt;body&gt;</code>: Isi utama halaman web (yang ditampilkan).</li>
</ul>

<h2>3. Elemen Teks Dasar</h2>
<table>
  <tr>
    <th>Elemen</th>
    <th>Fungsi</th>
  </tr>
  <tr>
    <td>&lt;h1&gt; sampai &lt;h6&gt;</td>
    <td>Judul, dari paling besar (&lt;h1&gt;) ke paling kecil (&lt;h6&gt;)</td>
  </tr>
  <tr>
    <td>&lt;p&gt;</td>
    <td>Paragraf</td>
  </tr>
  <tr>
    <td>&lt;br&gt;</td>
    <td>Ganti baris</td>
  </tr>
  <tr>
    <td>&lt;hr&gt;</td>
    <td>Garis horizontal</td>
  </tr>
  <tr>
    <td>&lt;strong&gt;</td>
    <td>Teks tebal</td>
  </tr>
  <tr>
    <td>&lt;em&gt;</td>
    <td>Teks miring</td>
  </tr>
</table>

<h2>4. Tautan dan Gambar</h2>
<pre><code>&lt;a href="https://www.google.com"&gt;Kunjungi Google&lt;/a&gt;

&lt;img src="gambar.jpg" alt="Deskripsi gambar" width="300" /&gt;
</code></pre>

<p><strong>Keterangan:</strong></p>
<ul>
  <li><code>&lt;a href="URL"&gt;</code>: Membuat hyperlink.</li>
  <li><code>&lt;img src="..." alt="..."&gt;</code>: Menampilkan gambar.</li>
</ul>

<h2>5. Daftar (List)</h2>
<pre><code>&lt;ul&gt;
  &lt;li&gt;Item daftar tak berurutan&lt;/li&gt;
  &lt;li&gt;Contoh kedua&lt;/li&gt;
&lt;/ul&gt;

&lt;ol&gt;
  &lt;li&gt;Item daftar terurut&lt;/li&gt;
  &lt;li&gt;Item kedua&lt;/li&gt;
&lt;/ol&gt;
</code></pre>

<h2>6. Tabel</h2>
<pre><code>&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th&gt;Nama&lt;/th&gt;
    &lt;th&gt;Umur&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Ari&lt;/td&gt;
    &lt;td&gt;21&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</code></pre>

<h2>7. Formulir (Form)</h2>
<pre><code>&lt;form action="proses.php" method="POST"&gt;
  &lt;label for="nama"&gt;Nama:&lt;/label&gt;
  &lt;input type="text" id="nama" name="nama" /&gt;
  
  &lt;br&gt;&lt;br&gt;

  &lt;label for="email"&gt;Email:&lt;/label&gt;
  &lt;input type="email" id="email" name="email" /&gt;

  &lt;br&gt;&lt;br&gt;

  &lt;input type="submit" value="Kirim" /&gt;
&lt;/form&gt;
</code></pre>

<h2>8. Komentar HTML</h2>
<pre><code>&lt;!-- Ini adalah komentar --&gt;
</code></pre>

<h2>9. Tag Khusus</h2>
<ul>
  <li><code>&lt;div&gt;</code>: Kontainer blok (bisa untuk layout).</li>
  <li><code>&lt;span&gt;</code>: Kontainer inline (untuk styling kecil).</li>
  <li><code>&lt;iframe&gt;</code>: Menyisipkan halaman web lain.</li>
  <li><code>&lt;video&gt;</code> &amp; <code>&lt;audio&gt;</code>: Menampilkan media.</li>
</ul>

<h2>10. Tips Praktik Belajar HTML</h2>
<ul>
  <li>✅ Gunakan Visual Studio Code (VS Code) atau Notepad++</li>
  <li>✅ Simpan file dengan ekstensi <code>.html</code></li>
  <li>✅ Buka dengan browser (klik dua kali file HTML)</li>
  <li>✅ Pelajari juga CSS dan JavaScript setelah menguasai HTML</li>
</ul>

<h2>11. Penggunaan CSS di HTML</h2>
<p>HTML bisa dikombinasikan dengan CSS untuk memperindah tampilan halaman web.</p>
<p><strong>3 Cara Menyisipkan CSS:</strong></p>

<h3>a. Inline CSS</h3>
<pre><code>&lt;p style="color: blue;"&gt;Teks ini berwarna biru&lt;/p&gt;
</code></pre>

<h3>b. Internal CSS</h3>
<pre><code>&lt;head&gt;
  &lt;style&gt;
    body {
      background-color: #f0f0f0;
    }
    h1 {
      color: green;
    }
  &lt;/style&gt;
&lt;/head&gt;
</code></pre>

<h3>c. Eksternal CSS</h3>
<p>HTML:</p>
<pre><code>&lt;link rel="stylesheet" href="style.css"&gt;
</code></pre>

<p>CSS (style.css):</p>
<pre><code>p {
  font-size: 18px;
}
</code></pre>

<h2>12. Media Responsif</h2>
<p>Gunakan properti <code>width="100%"</code> atau media queries CSS agar gambar dan layout menyesuaikan layar.</p>
<pre><code>&lt;img src="gambar.jpg" alt="Contoh" style="width: 100%; max-width: 400px;"&gt;
</code></pre>

<h2>13. Membuat Navigasi Sederhana</h2>
<pre><code>&lt;nav&gt;
  &lt;a href="#beranda"&gt;Beranda&lt;/a&gt; |
  &lt;a href="#tentang"&gt;Tentang&lt;/a&gt; |
  &lt;a href="#kontak"&gt;Kontak&lt;/a&gt;
&lt;/nav&gt;
</code></pre>

<h2>14. Menyisipkan Video dan Audio</h2>
<pre><code>&lt;video width="320" height="240" controls&gt;
  &lt;source src="video.mp4" type="video/mp4"&gt;
  Browser Anda tidak mendukung video tag.
&lt;/video&gt;

&lt;audio controls&gt;
  &lt;source src="audio.mp3" type="audio/mpeg"&gt;
  Browser Anda tidak mendukung audio tag.
&lt;/audio&gt;
</code></pre>

<h2>15. Membuat Layout Dasar dengan &lt;div&gt;</h2>
<pre><code>&lt;div style="width: 100%; background-color: lightblue;"&gt;
  &lt;h2&gt;Header&lt;/h2&gt;
&lt;/div&gt;

&lt;div style="display: flex;"&gt;
  &lt;div style="width: 70%; background-color: #eee;"&gt;Konten Utama&lt;/div&gt;
  &lt;div style="width: 30%; background-color: #ccc;"&gt;Sidebar&lt;/div&gt;
&lt;/div&gt;

&lt;div style="background-color: lightgray;"&gt;
  &lt;p&gt;Footer&lt;/p&gt;
&lt;/div&gt;
</code></pre>

<h2>16. Favicon (Ikon di Tab Browser)</h2>
<p>Tambahkan di bagian <code>&lt;head&gt;</code>:</p>
<pre><code>&lt;link rel="icon" type="image/png" href="favicon.png"&gt;
</code></pre>

<h2>17. HTML Entities (Karakter Khusus)</h2>
<table>
  <tr>
    <th>Karakter</th>
    <th>Entity</th>
    <th>Hasil</th>
  </tr>
  <tr>
    <td>&lt;</td>
    <td>&amp;lt;</td>
    <td><</td>
  </tr>
  <tr>
    <td>&gt;</td>
    <td>&amp;gt;</td>
    <td>></td>
  </tr>
  <tr>
    <td>&amp;</td>
    <td>&amp;amp;</td>
    <td>&amp;</td>
  </tr>
  <tr>
    <td>"</td>
    <td>&amp;quot;</td>
    <td>"</td>
  </tr>
  <tr>
    <td>(c)</td>
    <td>&amp;copy;</td>
    <td>©</td>
  </tr>
</table>

<h2>18. Contoh Lengkap Halaman HTML Sederhana</h2>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="id"&gt;
&lt;head&gt;
  &lt;meta charset="UTF-8"&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
  &lt;title&gt;Halaman Contoh&lt;/title&gt;
  &lt;style&gt;
    body { font-family: Arial; padding: 20px; }
    header, footer { background: #eee; padding: 10px; text-align: center; }
    nav a { margin: 0 10px; text-decoration: none; color: darkblue; }
  &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

  &lt;header&gt;
    &lt;h1&gt;Selamat Datang di Situs Saya&lt;/h1&gt;
    &lt;nav&gt;
      &lt;a href="#"&gt;Beranda&lt;/a&gt;
      &lt;a href="#"&gt;Tentang&lt;/a&gt;
      &lt;a href="#"&gt;Kontak&lt;/a&gt;
    &lt;/nav&gt;
  &lt;/header&gt;

  &lt;main&gt;
    &lt;h2&gt;Judul Artikel&lt;/h2&gt;
    &lt;p&gt;Ini adalah paragraf pertama pada artikel ini.&lt;/p&gt;
    &lt;img src="gambar.jpg" alt="Gambar Contoh" style="max-width:100%; height:auto;"&gt;
  &lt;/main&gt;

  &lt;footer&gt;
    &lt;p&gt;&copy; 2025 Ari Andika Leva Pratama&lt;/p&gt;
  &lt;/footer&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>

---


