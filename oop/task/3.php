<?php
class produk {
    public 
        $judul, 
        $penulis, 
        $harga, 
        $jumlahHalaman, 
        $jumlahWaktu;

    public function __construct($judul, $penulis, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul, $this->penulis";
    }

    public function getInfoLengkap() {
        $str = "{$this->getLabel()} | $this->harga";
        return $str;
    }
}

class buku extends produk {
    public function __construct($judul, $penulis, $harga, $jumlahHalaman) {
        parent ::__construct($judul, $penulis, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfoProduk() {
        $str = "Komik : {$this->getLabel()} | $this->harga - $this->jumlahHalaman Halaman. <br>";
        return $str; 
    }
}

class game extends produk {
    public function __construct($judul, $penulis, $harga, $jumlahWaktu) {
        parent ::__construct($judul, $penulis, $harga);
        $this->jumlahWaktu = $jumlahWaktu;
    }
    public function getInfoProduk() {
        $str = "Game : {$this->getLabel()} | $this->harga - $this->jumlahWaktu Jam. <br>";
        return $str; 
    }
}

$produk1 = new buku ("Burlian", "Tere Liye", 30000, 415);
$produk2 = new game ("Watch Dogs", "Ubisoft", 250000, 5);

echo $produk1->getInfoProduk();
echo $produk2->getInfoProduk();

