<?php

class tag {
    public function __construct(){
        echo "Ini berasal dari Contstructor Laptop<br>";
    }
    public function aktif(){
        echo "Hidupkan Laptop Lenopo punya Andi<br>";
    }
    public function __destruct(){
        echo "Ini berasal dari Destructor Laptop <br>";
        echo "Objek telah di hancurkan";
    }
}
$user = new tag;
$user->aktif();