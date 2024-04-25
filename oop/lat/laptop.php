<?php
class laptop{
    public
        $nama,
        $brand;
    public function __construct($nama,$brand){
        $this->nama = $nama;
        $this->brand = $brand;
    }
    public function show(){
        echo "Nama pemilik laptop " . $this->brand . " adalah ". $this->nama;
    }
}
$user->show();
$user = new laptop("Lala", "Legeg");