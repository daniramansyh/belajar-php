<?php
class hewan {
  public $nama;
  public $kaki;
  public function __construct($nama, $kaki) {
    $this->nama = $nama;
    $this->kaki = $kaki;
  }
  public function intro() {
    echo "Aku hewan bernama {$this->nama} dia berkaki {$this->kaki}.";
  }
  public function message() {
    echo "Hewan apakah aku ?,   ";
  }
}

class anjing extends hewan {
}

class babi extends hewan {
}

class bebek extends hewan {

}

$anjing = new anjing("Anjing", "Empat");
$anjing->message();
$anjing->intro();

echo "<br>";
$babi = new babi("Babi", "Empat");
$babi->message();
$babi->intro();

echo "<br>";
$bebek = new bebek("Bebek", "Dua");
$bebek->message();
$bebek->intro();
