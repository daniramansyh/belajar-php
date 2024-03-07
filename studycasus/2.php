<?php
for ($i=1; $i <= 3; $i++) {
    echo " Hasil Perkalian " . $i . "<br>";
    for ($n=1; $n <= 10; $n++) { 
        $hasil = $n * $i;
        echo "{$i} x {$n} = {$hasil} <br>";
    }
}
?>
