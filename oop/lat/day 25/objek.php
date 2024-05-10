<?php

class laptop {
    public 
        $nama,
        $nomer;
    public function __construct($nomer, $nama) {
        $this->nomer = $nomer;
        $this->nama = $nama;
    }
    public function show(){
        echo "Laptop $this->nama milik : <b> $this->nomer </b> <br>";
    }
}

$user = new laptop ("Andi", 1);
$user->show();
$user1 = new laptop ("Anto", 2);
$user1->show();
$user2 = new laptop ("Dina", 3);
$user2->show();