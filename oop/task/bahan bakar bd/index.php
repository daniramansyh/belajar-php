<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menghitung Harga dengan Konsep OOP</title>
</head>
<body>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="liter">Masukan Jumlah Liter Pembelian : </label>
            <input type="number" name="liter" id="liter" required>
        </div>
        <div style="display: flex;">
            <label for="jenis">Pilih Jenis Bahan Bakar :</label>
            <select name="jenis" required>
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">Shell V-Power</option>
                <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                <option value="SVPowerNitro">Shell V-Power Nitro</option>
            </select>
        </div>
        <button type="submit" name="beli">Beli</button>
    </form>

    <?php 
    require 'logic.php';
    $logic = new Pembelian();
    $logic->setHarga(10000,15000,18000,20000);
    if(isset($_POST['beli'])) {
        $logic->jenisYangDipilih = $_POST['jenis'];
        $logic->totalLiter = $_POST['liter'];
        $logic->totalHarga();
        $logic->cetakBukti();
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>