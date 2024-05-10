<?php 
class Toko {
    protected function beli() {
        return "Yey beli baru!";
    }
    public function getbeli() {
        return $this->beli();
    }
}
class Hape extends Toko {
    public function beli_laptop(){
        return $this->beli();
    }
}
class Komputer extends Hape {
    public function beli_komputer(){
        return $this->beli_laptop();
    }
}

$laptop_baru = new Hape();
$toko = new Toko();
$komputer = new Komputer();
echo $laptop_baru->beli_laptop();
echo"<br>";
echo $toko->getbeli();