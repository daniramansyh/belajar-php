<?php require 'sistem.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistem Pom Bensin</title>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center bg-secondary bg-opacity-50%"
        style="height: 100vh;">
        <div class="container rounded-2 p-5 shadow p-3 border border-white" style="max-width: 750px;">
            <form action="" method="post" class="container bg-body rounded-2 " style="max-width:600px; height: auto;">
                <div class="row">
                    <div>
                        <h1>Selamat Datang di Pom Xet</h1>
                    </div>
                    <div class="col">
                        <label for="bensin" class="form-label fw-semibold">Pilih Jenis Bensin</label>
                        <select name="jenis" id="bensin" class="form-select mb-3" aria-label="Default select example" required>
                            <option selected disabled>Tipe Bahan Bakar</option>
                            <option value="Super">Shell Super</option>
                            <option value="V-Power">Shell V-Power</option>
                            <option value="Diesel">Shell V-Power Diesel</option>
                            <option value="Nitro">Shell V-Power Nitro</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="jumlah" class="form-label fw-semibold">Masukan Jumlah (liter)</label>
                        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Liter" required>
                    </div>
                    <div class="col">
                        <label for='money' class='form-label fw-semibold'>Masukan Uang (Rupiah)</label>
                        <input type='number' name='money' class='form-control' placeholder='Uang Rupiah' required>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <button type="submit" name="lihat" class="btn btn-secondary btn-lg mb-3 mt-3"
                            style="width: 276px; margin-left: 12px;">Beli</button>
                    </div>
                </div>
            </form>
            <div class="container bg-body rounded-2 mt-3">
                <?php
                if (isset($_POST['lihat']) && !empty($_POST['jenis']) && !empty($_POST['jumlah']) && !empty($_POST['money'])) {
                    $produk = new Buy($jenis, $jumlah, $uang);
                    $produk->harga();
                }
                ?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Struk Anda</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class='card text-center mt-3'>
                        <p>
                            <center>
                                -----------------------------------------------------<br>
                                -----------------------------------------------------<br>
                                Tipe bahan bakar yang anda beli: <?php echo "Shell", $produk->jenis; ?> <br>
                                Anda membeli bahan bakar sebanyak: <?php echo $produk->jumlah; ?> <br>
                                Harga asli: Rp.<?php number_format($produk->price, 2, ',', '.') ?> <br>
                                PPN: Rp.<?php number_format($produk->pajak, 2, ',', '.') ?> <br>
                                Total yang harus anda bayar dalah Rp.<?php echo $produk->total ?><br>
                                -----------------------------------------------------<br>
                                Uang yang anda gunakan: Rp.<?php echo number_format($produk->uang, 2, ",", ".") ?><br>
                                Sisa uang yang telah anda gunakan: Rp.<?php echo $produk->sisa ?><br>
                                -----------------------------------------------------<br>
                                -----------------------------------------------------<br>
                            </center>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.print()" class="btn btn-secondary btn-lg mb-3 mt-3"
                        style="width: 276px; margin-left: 12px;">Print</button>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                    crossorigin="anonymous"></script>
</body>

</html>