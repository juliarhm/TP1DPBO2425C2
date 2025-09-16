from Pelanggan import Pelanggan
    # p1 = Pelanggan(1, "Budi", "08123", "Bandung")
    # p2 = Pelanggan(2, "Sinta", "08234", "Jakarta")

    # print("Nama P1:", p1.getNama())
    # print("Nama P2:", p2.getNama())

    # p1.setNama("Budiii")
    # print("Nama P1 setelah setNama:", p1.getNama())

daftar_pelanggan = []  # list of object

def tambah_pelanggan():
    id = int(input("ID: "))
    nama = input("Nama: ")
    telp = input("No. Telepon: ")
    alamat = input("Alamat: ")

    p = Pelanggan(id, nama, telp, alamat)  # bikin object
    daftar_pelanggan.append(p)  # simpan ke list
    print("Pelanggan berhasil ditambahkan!\n")

def tampilkan_pelanggan():
    if not daftar_pelanggan:
        print("Belum ada data pelanggan.\n")
    else:
        for p in daftar_pelanggan:
            print(f"ID: {p.getID()}, Nama: {p.getNama()}, Telepon: {p.getNo_Telephone()}, Alamat: {p.getAlamat()}")

def update_pelanggan():
    id = int(input("Masukkan ID yang ingin diupdate: "))
    for p in daftar_pelanggan:
        if p.getID() == id:
            nama = input("Nama baru: ")
            telp = input("No. Telepon baru: ")
            alamat = input("Alamat baru: ")

            p.setNama(nama)
            p.setNo_Telephone(telp)
            p.setAlamat(alamat)

            print("Data pelanggan berhasil diupdate!\n")
            return
    print("Pelanggan dengan ID tersebut tidak ditemukan.\n")

def hapus_pelanggan():
    id = int(input("Masukkan ID yang ingin dihapus: "))
    for p in daftar_pelanggan:
        if p.getID() == id:
            daftar_pelanggan.remove(p)
            print("Data pelanggan berhasil dihapus!\n")
            return
    print("Pelanggan dengan ID tersebut tidak ditemukan.\n")

def cari_pelanggan():
    id = int(input("Masukkan ID yang dicari: "))
    for p in daftar_pelanggan:
        if p.getID() == id:
            print(f"Ditemukan → ID: {p.getID()}, Nama: {p.getNama()}, Telepon: {p.getNo_Telephone()}, "f"Alamat: {p.getAlamat()}\n")
            return
    print("Pelanggan dengan ID tersebut tidak ditemukan.\n")

def main():
    while True:
        print("\n=== MENU ===")
        print("1. Tambah Pelanggan")
        print("2. Lihat Semua Pelanggan")
        print("3. Update Pelanggan")
        print("4. Hapus Pelanggan")
        print("5. Cari Pelanggan")
        print("6. Keluar ?")
        pilihan = input("Pilih menu: ")

        if pilihan == "1":
            tambah_pelanggan()
        elif pilihan == "2":
            tampilkan_pelanggan()
        elif pilihan == "3":
            update_pelanggan()
        elif pilihan == "4":
            hapus_pelanggan()
        elif pilihan == "5":
            cari_pelanggan()
        elif pilihan == "6":
            print("Selesai!!\n")
            return
        else:
            print("Pilihan tidak valid!!")

if __name__ == "__main__":
    main()
