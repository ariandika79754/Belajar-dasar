🎨 Materi Dasar Pemrograman dengan CSS
1. Apa itu CSS?
CSS (Cascading Style Sheets) adalah bahasa yang digunakan untuk mengatur tampilan dan gaya elemen HTML,
 seperti warna, ukuran, posisi, dan layout halaman web.

✅ Fungsi utama CSS:

Memisahkan konten dan desain

Mempermudah pengelolaan gaya di seluruh halaman

Meningkatkan tampilan dan user experience

2. Cara Menyisipkan CSS
Ada 3 cara menggunakan CSS:

html

<!-- Inline CSS -->
<p style="color: red;">Teks ini berwarna merah.</p>

<!-- Internal CSS -->
<style>
  p {
    color: blue;
  }
</style>

<!-- External CSS -->
<link rel="stylesheet" href="style.css" />
📌 Disarankan untuk menggunakan external CSS agar file lebih rapi dan mudah dikelola.

3. Selector dan Properti CSS
Sintaks dasar:

css

selector {
  property: value;
}
Contoh:

css

h1 {
  color: green;
  font-size: 24px;
}
🧠 Selector = Elemen HTML yang ditarget
🧠 Property = Fitur yang ingin diubah
🧠 Value = Nilai dari properti tersebut

4. Properti CSS Dasar
Properti	Fungsi	Contoh
color	Warna teks	color: red;
background	Warna/Foto latar belakang	background: yellow;
font-size	Ukuran teks	font-size: 18px;
font-family	Jenis huruf	font-family: Arial;
text-align	Perataan teks	text-align: center;
padding	Ruang di dalam elemen	padding: 10px;
margin	Ruang di luar elemen	margin: 20px;
border	Garis tepi	border: 1px solid black;
width/height	Lebar/Tinggi elemen	width: 300px;

5. Class dan ID
Untuk memberi gaya spesifik pada elemen tertentu:

html

<!-- HTML -->
<p class="judul">Ini judul dengan class</p>
<p id="spesial">Ini teks dengan ID</p>
css

/* CSS */
.judul {
  color: purple;
}

#spesial {
  font-weight: bold;
}
6. Box Model CSS
Setiap elemen HTML dianggap sebagai kotak (box) dengan struktur:

lua

+---------------------------+
|       Margin              |
|  +---------------------+  |
|  |     Border          |  |
|  |  +--------------+   |  |
|  |  |  Padding     |   |  |
|  |  | +--------+   |   |  |
|  |  | | Content |   |   |  |
|  |  | +--------+   |   |  |
|  |  +--------------+   |  |
|  +---------------------+  |
+---------------------------+
Gunakan properti margin, border, padding, dan width/height untuk mengatur tampilan elemen.

7. Layout Dasar dengan CSS
Display: block, inline, inline-block, flex, grid

Contoh layout flexbox:

css

.container {
  display: flex;
  justify-content: space-between;
}
Contoh HTML:

html

<div class="container">
  <div>Box 1</div>
  <div>Box 2</div>
</div>
8. Pseudo-class dan Pseudo-element
Contoh pseudo-class:

css

a:hover {
  color: red;
}
Contoh pseudo-element:

css

p::first-line {
  font-weight: bold;
}
9. Responsive Design
Gunakan media queries untuk menyesuaikan tampilan di berbagai perangkat:

css

@media (max-width: 600px) {
  body {
    background-color: lightgray;
  }
}
10. Tips Praktik Belajar CSS
✅ Gunakan developer tools di browser untuk eksperimen
✅ Simpan file CSS dengan ekstensi .css
✅ Gunakan tool seperti CSS Grid Generator untuk belajar layout
✅ Pelajari juga framework seperti Bootstrap setelah paham CSS dasar

📦 Bonus: Contoh File HTML + CSS

index.html

html

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Profil Sederhana</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h1 class="judul">Halo, Saya Ari!</h1>
  <p id="bio">Saya sedang belajar HTML dan CSS.</p>
</body>
</html>
style.css

css

body {
  background-color: #f4f4f4;
  font-family: Arial, sans-serif;
}

.judul {
  color: #2c3e50;
  text-align: center;
}

#bio {
  color: #555;
  font-size: 18px;
  text-align: center;
}