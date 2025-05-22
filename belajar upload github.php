Berikut adalah penjelasan lengkap dari perintah Git yang kamu tulis:



📘 Penjelasan Perintah Git

🔹 "git init"

> Fungsi: Menginisialisasi repository Git lokal di folder proyek kamu.

🔍 Artinya: Folder proyek kamu sekarang menjadi repositori Git, dan Git mulai bisa melacak perubahan file di dalamnya. Akan terbentuk folder ".git" tersembunyi.



🔹 "git add ."

> Fungsi: Menambahkan seluruh file dan folder yang ada di dalam direktori ke *staging area*.

🔍 Artinya: Semua file yang ada (bukan hanya satu file seperti "README.md") akan disiapkan untuk dicatat dalam commit. Titik (".") artinya "semua file".



🔹 "git commit -m "first commit""

> Fungsi: Menyimpan snapshot dari file yang sudah ditambahkan ke staging area, dengan pesan ""first commit"".

🔍 Artinya: Kamu menciptakan versi awal dari proyekmu, dan menyimpan catatan perubahan tersebut ke dalam Git.



🔹 "git branch -M main"

> Fungsi: Mengubah nama branch aktif menjadi "main".

🔍 Artinya: Branch default awalnya bernama "master", dan sekarang kamu ubah menjadi "main" (sesuai standar baru di GitHub).



🔹 "git remote add origin https://github.com/ariandika79754/Belajar-dasar.git"

> Fungsi: Menambahkan remote repository GitHub dengan nama "origin".

🔍 Artinya: Kamu menghubungkan proyek lokalmu ke repository GitHub "Belajar-dasar" milikmu. Sekarang Git tahu ke mana harus mengirim data.



🔹 "git push -u origin main"

> Fungsi: Mengupload (*push*) branch "main" lokal ke repository GitHub "origin".

🔍 Artinya:

* Semua commit kamu dikirim ke GitHub.
* Opsi "-u" membuat branch "main" otomatis terkait dengan "origin/main", jadi ke depannya kamu bisa cukup pakai "git push" saja.



 🧠 Kesimpulan

Setelah menjalankan semua perintah di atas:

✅ Semua file proyek kamu sudah:

* Terlacak oleh Git
* Tersimpan dalam commit awal
* Terhubung ke repository GitHub
* Di-*upload* ke GitHub di branch "main"



Kalau kamu butuh bantu buat ".gitignore", deploy ke GitHub Pages, atau mulai file "index.html", tinggal bilang aja!