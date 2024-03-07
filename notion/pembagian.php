<?php
for ($i= 1; $i <= 10; $i++) { 
    echo "Lakukan Pembagian $i <br>";
    for ($n=1; $n <= 100; $n++) {
            $hasil = $n * $i;
        echo "$hasil / $i = $n<br>";
    }
}
