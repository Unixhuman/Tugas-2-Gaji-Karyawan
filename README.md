# Dokumentasi-Tugas-2-Gaji-Karyawan
FITUR :
1. Entri Data Karyawan (add_karyawan.php):
   - Memungkinkan pengguna untuk menambahkan informasi karyawan baru.
   - Menangkap NIK (Nomor Induk Karyawan), Nama Lengkap, Alamat, dan Gaji Pokok.
   - Menyediakan opsi untuk menetapkan gaji untuk karyawan tersebut (Set Gaji link).
     
2. Entri Data Gaji (add_gaji.php):
   - Memungkinkan pengguna untuk menambahkan informasi gaji untuk karyawan tertentu.
   - Menangkap NIK, Jam Kerja, Upah Lembur, Tanggal, dan Total Gaji.
   - Menghitung dan menampilkan total gaji berdasarkan jam kerja, upah lembur, dan parameter lainnya.

3. Perhitungan Gaji (main.js):
   - Memberikan perhitungan dinamis dari total gaji berdasarkan jam kerja dan upah lembur.
   - Pengguna dapat memasukkan jam kerja, dan sistem menghitung total gaji.

4. Penyajian dan Pengeditan Data Gaji (edit_gaji.php):
   - Menampilkan data gaji yang ada dalam tabel (gaji.php).
   - Memberikan opsi untuk mengedit informasi gaji karyawan.
   - Menampilkan detail relevan seperti NIK, Gaji Pokok, Jam Kerja, Upah Lembur, Tanggal, dan Total Gaji.
   - Menghitung total gaji secara dinamis berdasarkan input pengguna.

5. Penyajian Data Karyawan (index.php):
   - Menampilkan tabel dengan daftar karyawan.
   - Termasuk NIK, Nama Lengkap, Alamat, Gaji Pokok, dan opsi untuk menetapkan gaji.

PENGGUNAAN : 
![image](https://github.com/Unixhuman/Tugas-2-Gaji-Karyawan/assets/146809846/4357bb24-b6d9-4273-9f9e-aa5d6918e111)
![image](https://github.com/Unixhuman/Tugas-2-Gaji-Karyawan/assets/146809846/21728677-edf8-411d-9521-33028235da7e)

1. Menambahkan Karyawan Baru:
   - Buka add_karyawan.php.
   - Masukkan detail karyawan (NIK, Nama Lengkap, Alamat, Gaji Pokok).
   - Klik tombol Simpan untuk menambahkan karyawan.

2. Menetapkan Gaji untuk Karyawan:
   - Buka add_gaji.php?nik=<nik_karyawan>.
   - Masukkan jam kerja, upah lembur, tanggal, dan sistem akan menghitung total gaji.
   - Klik tombol Simpan untuk menambahkan informasi gaji untuk karyawan.

3. Mengedit Informasi Gaji:
   - Buka edit_gaji.php?id=<id_gaji>.
   - Edit informasi yang relevan (jam kerja, upah lembur, tanggal).
   - Klik tombol Simpan untuk memperbarui informasi gaji.

4. Melihat Data Karyawan dan Gaji:
   - Buka index.php dan gaji.php untuk melihat daftar karyawan dan detail gaji mereka
