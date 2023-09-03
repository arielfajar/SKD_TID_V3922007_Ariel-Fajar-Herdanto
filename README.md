HTML Dasar: Program dimulai dengan mendefinisikan dokumen HTML dasar. Ini mencakup elemen <head> yang berisi judul halaman, referensi ke file CSS Bootstrap, dan definisi gaya CSS untuk latar belakang. Selanjutnya, elemen <body> digunakan untuk menampilkan konten halaman.

Form Enkripsi: Di dalam elemen <body>, terdapat dua bagian utama: form enkripsi dan form dekripsi. Form enkripsi memungkinkan pengguna untuk memasukkan teks yang akan dienkripsi. Saat pengguna mengirimkan formulir ini, data plaintext yang dimasukkan akan diambil melalui metode GET.

Form Dekripsi: Form dekripsi memungkinkan pengguna untuk memasukkan teks yang akan didekripsi. Saat pengguna mengirimkan formulir ini, data ciphertext yang dimasukkan akan diambil melalui metode POST.

Fungsi Enkripsi (enkripsiData): Pada sisi server (PHP), ada fungsi enkripsiData yang mengambil teks plaintext sebagai argumen. Fungsi ini menggunakan tabel substitusi karakter yang didefinisikan dalam array $key. Setiap karakter dalam plaintext digantikan dengan karakter yang sesuai dari tabel substitusi, dan hasilnya adalah ciphertext. Ciphertext ini kemudian ditampilkan kepada pengguna setelah proses enkripsi selesai.

Fungsi Dekripsi (dekripsiData): Fungsi dekripsiData melakukan proses sebaliknya dari enkripsi. Ini mengambil teks ciphertext sebagai argumen dan menggunakan tabel substitusi yang sama untuk mengembalikan teks plaintext yang asli.

Menampilkan Hasil: Setelah proses enkripsi atau dekripsi selesai, hasilnya ditampilkan kepada pengguna di halaman web. Hasil enkripsi atau dekripsi, serta teks asli yang digunakan, ditampilkan sebagai informasi kepada pengguna.
