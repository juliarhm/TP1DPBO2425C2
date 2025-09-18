Saya Julia Rahmawati dengan NIM 2400742 mengerjakan TP 1 dalam mata kuliah Desain Pemrograman Berorientasi Berorientasi Objek untuk keberkahan-Nya, maka saya tidak akan melakukan kecurangan seperti yang telah di spesifikasikan Aamiin.

Saya akan menjelaskan program sederhana yang dapat mengelola data di sebuah toko elektronik. Program ini di buat dalam 4 bahasa Java, PHP, Python, dan CPP. Jadi di dalam Program ini saya membuat 1 class saja, yaitu class pelanggan. Jadi setiap pelanggan yang beli di toko elektronik maka akan di data. 
1. Desain Class (Java, C++, dan Python)
   > Atributnya di buat secara private, dimana ada 4 atribut yaitu, ID, Nama, No_Telephone, dan Alamat. Ada fungsi constructor yang mengisi data pelanggan saat objek dibuat. Lalu ada Getter dan Setter, dimana untuk membaca dan mengubah Nama, No_Telephone, dan Alamat. Untuk ID saya hanya menggunakan Getter saja di Karena ID itu tidak dapat di ubah setalah di buat dan agar menghindari ID yang sama, tapi di kode program saya ini belum bisa mengecek apakah ID sudah di gunakan atau belum, jadi kemungkinan ada ID yang akan sama.
   > Fungsi fungsi CRUD yang ada di program.
   1. tambah_pelanggan -> meminta input dari user -> membuat objek -> tambahkan ke array daftar pelanggan.
   2. tampilkan_pelanggan -> looping semua elemen di daftar_pelanggan -> tampilkan semua datanya.
   3. Update_pelanggan -> mencari pelanggan berdasarkan ID -> jika ketemu update nama, no_telephone, dan alamat.
   4. hapus_pelanggan -> mencari pelanggan berdasarkan ID -> data pelanggan tersebut akan terhapus semua nama, no_telephone, dan alamatnya.
   5. cari_pelanggan -> mencari pelanggan berdasarkan ID -> jika ketemu atau ada maka akan di tampilkan.
   6. keluar-> untuk mengakhiri program
3. Desain Class( PHP )
   > Untuk atribut di PHP hampir sam seperti di Java, C++, dan Python. Hanya saja disini ada tambahan atribut yaitu foto.
   > Fitur-fitur Crud
   1. tambah pelanggan -> form diisi user lalu datanya di krim ke via post, foto fi upload ke folder uploads/, dan objek pelanggan di buat dan disimpan di $_SESSION[daftar_pelanggan]
   2. update pelanggan -> untuk update ini pertama harus ke bagian aksi di tampilan semua pelanggan delete dan update. jika ingin update maka klik yang update. ambil ID dari form, jika ada perbaruai yang ingin di perbarui ada foto, no_telephon, alamat dan nama.
   3. hapus pelanggan -> pada bagian aksi piih objek yang ingin di hapus lalu klik delete maka objek akan terhapus dari $_SESSION[daftar_pelanggan]
   4. cari pelanggan -> ambil keyword dari input, pencarian bisa dari ID, nama, dan NO_telephone. lalu akan menampilkan data yang cocok.
