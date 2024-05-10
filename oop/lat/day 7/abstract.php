<?php
abstract class AlatElektronik {
    abstract public function lihat_spec();
    public static function hidupkan_komputer(){
        echo"Hidupkan Komputer";
    }
}
class Lulu extends AlatElektronik{
    public function lihat_spec(){
        return"Lihat spec Laptop...";
    }
    public function beli_laptop(){
        return"Beli Laptop...";
    }
}

class Handphone extends AlatElektronik{
    public function lihat_spec(){
        return"Lihat spec Hanphone...";
    }
}

$laptop_baru = new Lulu();
echo $laptop_baru->lihat_spec();
echo"<br/>";
echo$laptop_baru->beli_laptop();
echo"</br>";