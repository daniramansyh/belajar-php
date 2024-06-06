<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sukamaju | Beli</title>
</head>
<body>
    <div class="container text-center">
        <h1>Pembelian</h1>
        <form action="" method="post" class="">
            <input type="number" class="form-control" name="uangBeli" placeholder="Silahkan Masukan Nominal Uang"
                required>
            <div class="fw-bold text-start mt-3">
                <?php
                $_SESSION['totalHarga'] = 0;
                if ($_SESSION['dataBarang'] && !empty($_SESSION['dataBarang'])) 
                {
                    foreach ($_SESSION['dataBarang'] as $key) 
                    {
                    $_SESSION['totalHarga'] += $key['total'];
                    }
                    echo "<p>Total Harga : Rp. " . number_format($_SESSION['totalHarga'], 2, ',', '.') . "</p>";
                }

                if (isset($_POST['beli'])) {
                    $uangBeli = $_POST['uangBeli'];
                    $_SESSION['kembalian'] = $uangBeli - $_SESSION['totalHarga'];

                    if ($uangBeli < $_SESSION['totalHarga']) 
                    {
                    $kurang = $_SESSION['totalHarga'] - $uangBeli;
                    
                    echo "<p class='alert alert-danger'>Pembelian Tidak Berhasil</p>";
                    echo "uang kamu kurang sebesar : $kurang";
                    } else 
                    {
                    $_SESSION['uangBeli'] = $uangBeli;
                    
                    echo "<p class='alert alert-success'>Pembelian berhasil</p>";
                    echo "<p>Kembalian : Rp. " . $_SESSION['kembalian'] . "</p>";
                    header("location: struk.php");
                    }
                }
                ?>
            </div>
            <div class="mt-3">
                <a href="index.php" class="btn btn-primary">Kembali</a>
                <button type="submit" name="beli" class="btn btn-danger">Beli</button>
            </div>
        </form>
    </div>
</body>
</html>