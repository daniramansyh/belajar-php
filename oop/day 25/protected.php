<?php 
class lele{
    protected $pemilik = "Anto";
    public function akses_pemilik(){
        return $this->pemilik;
    }
    protected function hidupkan_laptop(){
        return "Hidupkan Laptop";
    }
    public function paksa_hidup(){
        return $this->hidupkan_laptop();
    }
    public function __get($pemilik){
        return $this->pemilik;
    }
    public function gethidup(){
        return $this->hidupkan_laptop();
    }
}

$laptop_anto = new lele();

echo $laptop_anto->akses_pemilik();
echo "<br>";
echo $laptop_anto->pemilik;
echo "<br>";
echo $laptop_anto->paksa_hidup();
echo "<br>";
echo $laptop_anto->gethidup();