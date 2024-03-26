<!DOCTYPE html>
<html>
<head>
    <title>Mencetak Bilangan Prima</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $awal = $_POST ["awal"];
        $akhir = $_POST ["akhir"];

        // Pemeriksaan untuk memastikan rentang akhir lebih besar atau sama dengan rentang awal

        if ($akhir < $awal) {
            echo "<p> Rentang akhir lebih kecil dari rentang awal. Silakan masukan nilai yang valid.</p>";
        } else {
            echo "<h3> Bilangan Prima antara $awal dan $akhir : </h3>";

            // Fungsi untuk mencetak apakah suatu angka adalah bilangan prima
            function isPrima($angka) {
                if ($angka <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($angka); $i++) {
                    if ($angka % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
        }
            // Cetak bilangan prima dalam rentang yang ditentukan
        for ($i = $awal; $i <= $akhir; $i++) {
            if (isPrima($i)) {
                echo "$i<br>";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="awal"> Batas Awal:</label>
        <input type="number" name="awal" required>

        <label for="akhir"> Batas Akhir:</label>
        <input type="number" name="akhir" required>

        <input type="submit" value="Cetak Bilangan Prima">
    </form>
    
</body>
</html>