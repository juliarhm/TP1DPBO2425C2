<?php
class Pelanggan {
    private $ID;
    private $Nama;
    private $No_Telephone;
    private $Alamat;
    private $Photo;

    // Constructor
    public function __construct($ID, $Nama, $No_Telephone, $Alamat, $Photo) {
        $this->ID = $ID;
        $this->Nama = $Nama;
        $this->No_Telephone = $No_Telephone;
        $this->Alamat = $Alamat;
        $this->Photo = $Photo;
    }

    // Getter
    public function getID() { return $this->ID; }
    public function getNama() { return $this->Nama; }
    public function getNo_Telephone() { return $this->No_Telephone; }
    public function getAlamat() { return $this->Alamat; }
    public function getPhoto()  {return $this->Photo; }

    // Setter
    public function setNama($Nama) { $this->Nama = $Nama; }
    public function setNo_Telephone($No_Telephone) { $this->No_Telephone = $No_Telephone; }
    public function setAlamat($Alamat) { $this->Alamat = $Alamat; }
    public function setPhoto($Photo) {$this->Photo = $Photo;}
}
?>