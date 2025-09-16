#include <iostream>
#include <string>
using namespace std;

class Pelanggan {
private:
    int ID;
    string Nama;
    string No_Telephone;
    string Alamat;

public:
    // Constructor
    Pelanggan(int id, string nama, string no_telp, string alamat) {
        this->ID = id;
        this->Nama = nama;
        this->No_Telephone = no_telp;
        this->Alamat = alamat;
    }

    // Getter ID
    int getID() {
        return ID;
    }

    // Getter & Setter Nama
    string getNama() {
        return Nama;
    }
    void setNama(string nama) {
        Nama = nama;
    }

    // Getter & Setter No_Telephone
    string getNo_Telephone() {
        return No_Telephone;
    }
    void setNo_Telephone(string no_telp) {
        No_Telephone = no_telp;
    }

    // Getter & Setter Alamat
    string getAlamat() {
        return Alamat;
    }
    void setAlamat(string alamat) {
        Alamat = alamat;
    }
};