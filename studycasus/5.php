<?php
$nilai = [80, 78, 72, 84, 92, 88];
// Tampilkan seluruh nilai
echo "Nilai saya: ";
foreach ($nilai as $key => $value) {
    echo "<b> $value </b>";
}
echo"<br>";

//  Menentukan terbesar
echo "Dari kesuluruhan nilai yang paling tinggi adalah: " . "<b>" . max($nilai) . "</b> <br>";

// Menentukan terkecil
echo "Sedangkan nilai yang paling kecil adalah: " . "<b>" . min($nilai) . "</b> <br>";

// Mengurutkan terkecil jadi terbesar
asort ($nilai);
echo "Apabila diurutkan dari yang terkecil adalah:" ;
foreach ($nilai as $hasil) {
    echo "<b>" . $hasil . " </b>";
}
echo"<br>";

// Mengurutkan terbesar jadi terkecil
arsort ($nilai);
echo "Apabila diurutkan dari yang terbesar adalah:" ;
foreach ($nilai as $hasil) {
    echo "<b>" . $hasil . " </b>";
}
echo"<br>";

// rata rata
echo "Apabila dibulatkan, rata rata dari kesuluruhan nilai saya adalah :";
echo " <b>".round (array_sum($nilai)/count($nilai))."</b>";
echo "<br>";

// memperbaiki nilai <= 75
ksort($nilai);
echo "Setelah melakukan perbaikan untuk nilai <b>" . $nilai[2] . "</b>,";
$nilai[2] = 75;
echo " saya mendapat nilai <b>". $nilai[2] . "</b>. Jadi nilai saya sekarang: ";
foreach ($nilai as $key => $value) {
    echo "<b> $value </b>";
}
echo"<br>";