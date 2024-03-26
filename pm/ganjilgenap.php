<!DOCTYPE html>
<html>
<head>
    <title> Mencetak Bilangan Ganjil Genap</title>
    <style>
        .header {
        background-color: blue;
        }
        .judul {
        background-color: black;
        color: white;
        }
        .program{
        background-color: red;
        }
    </style>

</head>
<body>
<div class = "header">
    <p> NIS     : 12309742 </p>
    <p> Nama    : Mochamad Dani Ramansyah</p>
    <p> Rombel  : PPLG X-1</p>
    <p> Rayon   : Ciawi 3</p>
</div>
<hr>
<div class = "judul">
    <p> Mencetak Bilangan Ganjil Genap </p>
</div>
<div class = "program">
    <?php
    // Inisialisasi nilai awal
    $bilangan = 1;
    // Do-while Loop untuk mencetak bilangan ganjil genap secara berurutan
    do {
        // Cetak bilangan ganjil
        echo "Bilangan Ganjil: $bilangan <br>";

        // Increment untuk bilangan genap
        $bilangan++;

        // Cetak bilangan genap
        echo "Bilangan Genap: $bilangan <br>";

        // Increment untuk bilangan ganjil berikutnya
        $bilangan++;
        
    } while ($bilangan <= 30);
    ?>
</div>
<hr>
</body>
</html>