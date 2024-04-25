<?php
  class Animal {
    protected function pindah() {
      echo "Animal moving!";
    }
  }
  
  class Kelinci extends Animal {
    public function suara() {
      echo "Kusrukkk! \n";
      $this->pindah(); 
    }
  }
  
  $rabbit = new Kelinci();
  $rabbit->suara(); 

