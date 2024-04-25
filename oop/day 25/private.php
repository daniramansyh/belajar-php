<?php 
// buat class komputer
class komputer {
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";

    public function tampilkan_processor() {
        echo $this->jenis_processor;
    }
    public function __get($jenis_processor){
        echo $this->jenis_processor;
    }
}
// new objek
$komputer_baru = new komputer();
echo $komputer_baru->tampilkan_processor();
echo"<br>";
echo $komputer_baru->jenis_processor;