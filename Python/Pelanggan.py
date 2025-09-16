class Pelanggan:

    def __init__(self, ID: int, Nama: str, No_Telephone: str, Alamat: str):
        self._ID = int(ID)
        self._Nama = str(Nama)
        self._No_Telephone = str(No_Telephone)
        self._Alamat = str(Alamat)

    # Getter untuk atribut ID
    def getID(self) -> int:
        return self._ID
    
    # Getter untuk atribut Nama
    def getNama(self) -> str:
        return self._Nama
    
    # Setter untuk atribut Nama
    def setNama(self, Nama: str) -> None:
        self._Nama = str(Nama)

    # Getter untuk atribut No_Telephone
    def getNo_Telephone(self) -> str:
        return self._No_Telephone
    
    # Setter untuk atribut No_Telephone
    def setNo_Telephone(self, No_Telephone: str) -> None:
        self._No_Telephone = str(No_Telephone)
    
    # Getter untuk atribut Alamat
    def getAlamat(self) -> str:
        return self._Alamat
    
    # Setter untuk atribut Alamat
    def setAlamat(self, Alamat: str) -> None:
        self._Alamat = str(Alamat)