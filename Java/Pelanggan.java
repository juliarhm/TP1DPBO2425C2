public class Pelanggan {
    private int ID;
    private String Nama;
    private String No_Telephone;
    private String Alamat;

    // Constructor
    public Pelanggan(int id, String nama, String no_telp, String alamat) {
        this.ID = id;
        this.Nama = nama;
        this.No_Telephone = no_telp;
        this.Alamat = alamat;
    }

    // Getter ID
    public int getID() {
        return ID;
    }

    // Getter & Setter Nama
    public String getNama() {
        return Nama;
    }
    public void setNama(String nama) {
        this.Nama = nama;
    }

    // Getter & Setter No_Telephone
    public String getNo_Telephone() {
        return No_Telephone;
    }
    public void setNo_Telephone(String no_telp) {
        this.No_Telephone = no_telp;
    }

    // Getter & Setter Alamat
    public String getAlamat() {
        return Alamat;
    }
    public void setAlamat(String alamat) {
        this.Alamat = alamat;
    }
}
