<?php
    echo "Hello Word" ."<br>";
?>

<?php
	//Ini adalah komentar satu baris
?>

<?php
	/*Ini adalah sebuah komentar pada php yang digunakan apabila banyak
	informasi ditulis di dalamnya */
?>

<?php
	#Ini adalah komentar Unix Shell
?>

<?php
   $nama = 'Mochamad Dani Ramansyah'; //ganti dengan nama kalian masing-masing
   $umur = 15; //ganti dengan umur kalian masing-masing 
    
   echo "Nama saya adalah ", $nama ."<br> Saya berumur $umur tahun"; 
?>

<?php
//Tipe data string (teks)
$nama = "daniramansyh";

//Tipe data integer
$umur = 15;
var_dump($umur);

//Tipe data float
$berat = 54.3;
$jarak = 1.2E-5;
echo "$jarak","<br>";

//Tipe data boolean
$menikah = false;
?>

<?php
$string = "SMK Wikrama";
 echo substr($string, 4). "<br>";
 echo strtolower(substr($string, 0, 4));
?>

<?php

$a = 5;
$b = 2;

//Penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

//Pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

//Pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

?>