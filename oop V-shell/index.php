<?php
class Shell {
    public
        $harga,
        $jumlah,
        $jenis,
        $ppn;
    public function __construct($harga,$jumlah,$jenis) {
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->jenis = $jenis;
        $this->ppn = ($harga * $jumlah) * (10/100);
    }
    public function run() {
        echo $this->harga . " " . $this->jumlah. " " . $this->jenis . " " . $this->ppn;
    }
}

$input = new Shell(10,3,"power");
$input->run();
?>