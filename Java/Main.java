import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    static ArrayList<Pelanggan> daftar_pelanggan = new ArrayList<>();
    static Scanner sc = new Scanner(System.in);

    static void tambah_pelanggan() {
        System.out.print("ID: ");
        int id = sc.nextInt(); sc.nextLine();
        System.out.print("Nama: ");
        String nama = sc.nextLine();
        System.out.print("No. Telepon: ");
        String telp = sc.nextLine();
        System.out.print("Alamat: ");
        String alamat = sc.nextLine();

        daftar_pelanggan.add(new Pelanggan(id, nama, telp, alamat));
        System.out.println("Pelanggan berhasil ditambahkan!\n");
    }

    static void tampilkan_pelanggan() {
        if (daftar_pelanggan.isEmpty()) {
            System.out.println("Belum ada data pelanggan.\n");
        } else {
            for (Pelanggan p : daftar_pelanggan) {
                System.out.println("ID: " + p.getID() + ", Nama: " + p.getNama() + ", Telepon: " + p.getNo_Telephone() + ", Alamat: " + p.getAlamat());
            }
            System.out.println();
        }
    }

    static void update_pelanggan() {
        System.out.print("Masukkan ID yang ingin diupdate: ");
        int id = sc.nextInt(); sc.nextLine();
        for (Pelanggan p : daftar_pelanggan) {
            if (p.getID() == id) {
                System.out.print("Nama baru: ");
                p.setNama(sc.nextLine());
                System.out.print("No. Telepon baru: ");
                p.setNo_Telephone(sc.nextLine());
                System.out.print("Alamat baru: ");
                p.setAlamat(sc.nextLine());
                System.out.println("Data berhasil diupdate!\n");
                return;
            }
        }
        System.out.println("Pelanggan dengan ID tersebut tidak ditemukan.\n");
    }

    static void hapus_pelanggan() {
        System.out.print("Masukkan ID yang ingin dihapus: ");
        int id = sc.nextInt(); sc.nextLine();
        for (int i = 0; i < daftar_pelanggan.size(); i++) {
            if (daftar_pelanggan.get(i).getID() == id) {
                daftar_pelanggan.remove(i);
                System.out.println("Data berhasil dihapus!\n");
                return;
            }
        }
        System.out.println("Pelanggan dengan ID tersebut tidak ditemukan.\n");
    }

    static void cari_pelanggan() {
        System.out.print("Masukkan ID yang dicari: ");
        int id = sc.nextInt(); sc.nextLine();
        for (Pelanggan p : daftar_pelanggan) {
            if (p.getID() == id) {
                System.out.println("Ditemukan ID: " + p.getID() + ", Nama: " + p.getNama() + ", Telepon: " + p.getNo_Telephone() + ", Alamat: " + p.getAlamat() + "\n");
                return;
            }
        }
        System.out.println("Pelanggan dengan ID tersebut tidak ditemukan.\n");
    }

    public static void main(String[] args) {
        while (true) {
            System.out.println("=== MENU ===");
            System.out.println("1. Tambah Pelanggan");
            System.out.println("2. Lihat Semua Pelanggan");
            System.out.println("3. Update Pelanggan");
            System.out.println("4. Hapus Pelanggan");
            System.out.println("5. Cari Pelanggan");
            System.out.println("6. Keluar ?");
            System.out.print("Pilih menu: ");
            int pilihan = sc.nextInt(); sc.nextLine();

            if (pilihan == 1) {
                tambah_pelanggan();
            } else if (pilihan == 2) {
                tampilkan_pelanggan();
            } else if (pilihan == 3) {
                update_pelanggan();
            } else if (pilihan == 4) {
                hapus_pelanggan();
            } else if (pilihan == 5) {
                cari_pelanggan();
            } else if (pilihan == 6){
                System.out.println("Selesai!!\n");
                return;
            } 
            else {
                System.out.println("Pilihan tidak valid!\n");
            }
        }
    }
}