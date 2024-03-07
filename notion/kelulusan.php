<?php
/*
Studi kasus:
Seorang dosen akan memberikan penilaian dengan kriteria
nilai >= 80 : nilai mutu A
nilai >= 68 : nilai mutu B
nilai >= 56 : nilai mutu C
nilai >= 45 : nilai mutu D
Selain itu nilai mutunya E
*/

// Versi 1
$nilai = 80;

if ($nilai >= 80){
    echo "Nilai anda " .$nilai. " Maka mutu anda A dinyatakan lulus";
} elseif ($nilai >= 68) {
    echo "Nilai anda " .$nilai. " Maka mutu anda B dinyatakan lulus";
} elseif ($nilai >= 56){
    echo "Nilai anda " .$nilai. " Maka mutu anda C dinyatakan lulus";
} elseif ($nilai >= 45){
    echo "Nilai anda " .$nilai. " Maka mutu anda D dinyatakan tidak lulus";
} else {
    echo "Nilai anda " .$nilai. " Maka mutu anda E dinyatakan tidak lulus";
}

echo "<br>";

// Versi 2
$nilai2 = 90;
if ($nilai2 >= 80){
    $nilaiMutu = "A";
    $ket = "Lulus";
} elseif ($nilai2 >= 68){
    $nilaiMutu = "B";
    $ket = "Lulus";
} elseif ($nilai2 >= 56){
    $nilaiMutu = "C";
    $ket = "Lulus";
} elseif ($nilai2 >= 45){
    $nilaiMutu = "D";
    $ket = "Tidak Lulus";
} else {
    $nilaiMutu = "E";
    $ket = "Tidak Lulus";
}
echo "Nilai anda " .$nilai2. " Maka mutu anda ". $nilaiMutu. " dinyatakan " .$ket;
echo "<br>";

// Versi 3
$nilai3 = 95;

if ($nilai3 >= 80){
    $nilaiMutu3 = "A";
} elseif ($nilai3 >= 68){
    $nilaiMutu3 = "B";
} elseif ($nilai3 >= 56){
    $nilaiMutu3 = "C";
} elseif ($nilai3 >= 45){
    $nilaiMutu3 = "D";
} else {
    $nilaiMutu3 = "E";
}

// Versi 3.1
// Membandingkan secara satu persatu tanpa menggunakan metode logika
if ($nilaiMutu3 == "A"){
    $ket3 = "Lulus";
} elseif ($nilaiMutu3 == "B"){
    $ket3 = "Lulus";
} elseif ($nilaiMutu3 == "C"){
    $ket3 = "Lulus";  
} elseif ($nilaiMutu3 == "D"){
    $ket3 = "Tidak Lulus";
} else {
    $ket3 = "Tidak Lulus";
}
echo "Nilai anda " .$nilai3. " Maka mutu anda ". $nilaiMutu3. " dinyatakan " .$ket3;
echo "<br>";

// Versi 3.2
// Membandingkan namun menggunakan metode logika or
if ($nilaiMutu3 == "A" || $nilaiMutu3 == "B" || $nilaiMutu3 == "C") {
    $ket4 = "Lulus";
} else {
    $ket4 = "Tidak Lulus";
}
echo "Nilai anda " .$nilai3. " Maka mutu anda ". $nilaiMutu3. " dinyatakan " .$ket4;
echo "<br>";

// Versi 4
$input = 80;

?>