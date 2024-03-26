<?php
class Shell {
    public $nama = 'Kucing';
    public $kaki;
    public $mamalia;
    public $jenis_makanan;

    public function __construct() {
        $nama = $this->nama;
    }

    public function showNama() {
        return $this->nama;
    }

    public function berjalan() {
        return true;
    }
}

$kucing = new Hewan;
echo "Memanggil properti/atribut: " . $kucing->nama . "<br> Memanggil Method/fungsi: " . $kucing->__construct();
?>