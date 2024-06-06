<?php 
require 'logic.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Beli</title>
</head>

<body>
    <div class="container main d-flex flex-column justify-content-center align-items-center" style="width: 100vh;">
        <p class="text-center fw-bold fs-5 mt-3">Bayar Sekarang</p>
        <form action="" method="post">
            <div class="row">
                <label for="jumlahUang">Masukan Nominal Uang</label>
                <input type="number" class="nama form-control mx-2" name="jumlahUang" placeholder="Masukan Uang" required>
            </div>
            <div class="row">
                <p class="fw-bold">Total yang harus dibayarkan adalah: Rp. <?php echo number_format(@$totalHarga, 2, ',', '.');?></p>
            </div>
            <button type="submit" name="buy" class="btn btn-primary mt-3 container" style="width: 100px;">Bayar</button>
            <a href="index.php" class="btn btn-secondary mt-3 container" style="width: 100px;">Kembali</a>
        </form>
        <div class="fw-bold text-start mt-3">
                <?php
                if (isset($_POST['buy'])) {
                    $uang = $_POST['jumlahUang'];
                    $_SESSION['kembalian'] = $uang - $totalHarga;

                    if ($uang < $totalHarga) 
                    {
                    $kurang = $totalHarga - $uang;
                    
                    echo "<p class='alert alert-danger'>Pembelian Tidak Berhasil</p>";
                    echo "Uang kamu kurang sebesar : Rp. ", number_format($kurang,2,',','.');
                    } else 
                    {
                    $_SESSION['jumlahUang'] = $uang;
                    
                    echo "<p class='alert alert-success'>Pembelian berhasil</p>";
                    echo "<p>Kembalian : Rp. " . number_format($_SESSION['kembalian'],2,',','.') . "</p>";
                    header("location: struk.php");
                    }
                }
                ?>
            </div>
    </div>
</body>

</html>