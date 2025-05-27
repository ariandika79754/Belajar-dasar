💻 Materi Dasar Pemrograman dengan JavaScript
1. Apa itu JavaScript?
JavaScript adalah bahasa pemrograman yang digunakan untuk menambahkan interaktivitas pada halaman web.

✅ Digunakan untuk:

Menangani event (klik, hover, input)

Memanipulasi elemen HTML dan CSS

Mengambil data dari server (AJAX/Fetch)

Membuat aplikasi web modern

2. Cara Menyisipkan JavaScript
Ada 3 cara menambahkan JavaScript ke HTML:

html
Salin
Edit
<!-- Inline -->
<button onclick="alert('Halo!')">Klik Saya</button>

<!-- Internal -->
<script>
  alert("Halo dari script internal!");
</script>

<!-- External -->
<script src="script.js"></script>
3. Variabel dan Tipe Data
Deklarasi variabel:

js
Salin
Edit
let nama = "Ari";      // bisa diubah
const umur = 21;       // tidak bisa diubah
var kota = "Lampung";  // versi lama, hindari
Tipe data umum:

String: "Halo"

Number: 10, 3.14

Boolean: true, false

Array: ["apel", "jeruk"]

Object: { nama: "Ari", umur: 21 }

4. Operator Dasar
Jenis	Contoh
Aritmatika	+, -, *, /, %
Perbandingan	==, ===, !=, >, <
Logika	&&, ||, !

5. Struktur Kontrol
If-Else:

js
Salin
Edit
let umur = 20;
if (umur >= 18) {
  console.log("Dewasa");
} else {
  console.log("Belum dewasa");
}
Switch:

js
Salin
Edit
let hari = "Senin";
switch(hari) {
  case "Senin":
    console.log("Hari kerja");
    break;
  case "Minggu":
    console.log("Hari libur");
    break;
}
Looping (perulangan):

js
Salin
Edit
for(let i = 1; i <= 5; i++) {
  console.log("Perulangan ke-" + i);
}

let i = 0;
while(i < 3) {
  console.log(i);
  i++;
}
6. Fungsi (Function)
js
Salin
Edit
function sapa(nama) {
  return "Halo, " + nama + "!";
}

console.log(sapa("Ari"));
7. Manipulasi DOM
DOM (Document Object Model) memungkinkan kita mengubah isi HTML dengan JS.

html
Salin
Edit
<p id="teks">Halo Dunia</p>
<button onclick="ubahTeks()">Ubah</button>

<script>
  function ubahTeks() {
    document.getElementById("teks").innerHTML = "Teks telah diubah!";
  }
</script>
8. Event Handling
html
Salin
Edit
<button onclick="salam()">Klik aku!</button>

<script>
  function salam() {
    alert("Halo dunia!");
  }
</script>
9. Array dan Object
js
Salin
Edit
let buah = ["apel", "mangga", "jeruk"];
console.log(buah[1]); // mangga

let orang = {
  nama: "Ari",
  umur: 21
};
console.log(orang.nama); // Ari
10. Bonus: Interaktif Form
html
Salin
Edit
<input type="text" id="nama" placeholder="Masukkan nama" />
<button onclick="tampilkanNama()">Tampilkan</button>
<p id="hasil"></p>

<script>
  function tampilkanNama() {
    let nama = document.getElementById("nama").value;
    document.getElementById("hasil").innerText = "Halo, " + nama;
  }
</script>
✅ Tips Belajar JavaScript
Gunakan browser console (tekan F12 → tab Console)

Latihan di situs seperti:
JSFiddle,
CodePen,
replit.com

Setelah menguasai dasar, lanjut ke DOM, Fetch API, dan Framework (React, Vue, dsb)

📦 Contoh Project Sederhana: Kalkulator Tambah
index.html

html
Salin
Edit
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kalkulator Tambah</title>
</head>
<body>
  <h1>Kalkulator Tambah</h1>
  <input type="number" id="angka1" placeholder="Angka pertama" />
  <input type="number" id="angka2" placeholder="Angka kedua" />
  <button onclick="jumlahkan()">Jumlahkan</button>
  <p>Hasil: <span id="hasil"></span></p>

  <script src="script.js"></script>
</body>
</html>
script.js

js
Salin
Edit
function jumlahkan() {
  let a = parseFloat(document.getElementById("angka1").value);
  let b = parseFloat(document.getElementById("angka2").value);
  let hasil = a + b;
  document.getElementById("hasil").innerText = hasil;
}