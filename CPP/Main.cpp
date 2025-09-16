#include <iostream>
#include <vector>
#include "Pelanggan.hpp"
using namespace std;

vector<Pelanggan> daftar_pelanggan;

void tambah_pelanggan()
{
    int id;
    string nama, telp, alamat;
    cout << "ID: ";
    cin >> id;
    cin.ignore();
    cout << "Nama: ";
    getline(cin, nama);
    cout << "No. Telepon: ";
    getline(cin, telp);
    cout << "Alamat: ";
    getline(cin, alamat);

    Pelanggan p(id, nama, telp, alamat);
    daftar_pelanggan.push_back(p);
    cout << "Pelanggan berhasil ditambahkan!\n";
}

void tampilkan_pelanggan()
{
    if (daftar_pelanggan.empty()){
        cout << "Belum ada data pelanggan.\n";
    }
    else{
        for (auto &p : daftar_pelanggan){
            cout << "ID: " << p.getID() << ", Nama: " << p.getNama() << ", Telepon: " << p.getNo_Telephone() << ", Alamat: " << p.getAlamat() << endl;
        }
    }
}

void update_pelanggan(){
    int id;
    cout << "Masukkan ID yang ingin diupdate: ";
    cin >> id;
    cin.ignore();
    for (auto &p : daftar_pelanggan){
        if (p.getID() == id){
            string nama, telp, alamat;
            cout << "Nama baru: ";
            getline(cin, nama);
            cout << "No. Telepon baru: ";
            getline(cin, telp);
            cout << "Alamat baru: ";
            getline(cin, alamat);

            p.setNama(nama);
            p.setNo_Telephone(telp);
            p.setAlamat(alamat);
            cout << "Data berhasil diupdate!\n";
            return;
        }
    }
    cout << "Pelanggan dengan ID tersebut tidak ditemukan.\n";
}

void hapus_pelanggan()
{
    int id;
    cout << "Masukkan ID yang ingin dihapus: ";
    cin >> id;
    for (auto it = daftar_pelanggan.begin(); it != daftar_pelanggan.end(); ++it)
    {
        if (it->getID() == id)
        {
            daftar_pelanggan.erase(it);
            cout << "Data berhasil dihapus!\n";
            return;
        }
    }
    cout << "Pelanggan dengan ID tersebut tidak ditemukan.\n";
}

void cari_pelanggan(){
    int id;
    cout << "Masukkan ID yang dicari: ";
    cin >> id;
    for (auto &p : daftar_pelanggan){
        if (p.getID() == id){
            cout << "Ditemukan ID: " << p.getID() << ", Nama: " << p.getNama() << ", Telepon: " << p.getNo_Telephone() << ", Alamat: " << p.getAlamat() << endl;
            return;
        }
    }
    cout << "Pelanggan dengan ID tersebut tidak ditemukan.\n";
}

int main(){
    int pilihan;
    while (true){
        cout << "\n=== MENU ===\n";
        cout << "1. Tambah Pelanggan\n";
        cout << "2. Tampilkan Pelanggan\n";
        cout << "3. Update Pelanggan\n";
        cout << "4. Hapus Pelanggan\n";
        cout << "5. Cari Pelanggan\n";
        cout << "6. Keluar ?\n";
        cout << "Pilih menu: ";
        cin >> pilihan;
        cin.ignore();

        if (pilihan == 1){
            tambah_pelanggan();
        }
        else if (pilihan == 2){
            tampilkan_pelanggan();
        }
        else if (pilihan == 3){
            update_pelanggan();
        }
        else if (pilihan == 4){
            hapus_pelanggan();
        }
        else if (pilihan == 5){
            cari_pelanggan();
        }
        else if (pilihan == 6){
            cout << "Selesai!!!\n";
            return 0;
        }
        else{
            cout << "Pilihan Tidak Valid!!\n";
        }
        
    }
}
