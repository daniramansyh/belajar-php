<?php
session_start();

if (!isset($_SESSION['dataBarang'])) {
    $_SESSION['dataBarang'] = array();
}

if (isset($_POST['tambah'])) {
    $total = $_POST['hargaBarang'] * $_POST['jumlahBarang'];

    $_SESSION["dataBarang"][] = array(
        "nama" => $_POST["namaBarang"],
        "harga" => $_POST["hargaBarang"],
        "jumlah" => $_POST["jumlahBarang"],
        "total" => $total
    );
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hapus'])) {
    $daftar = $_POST['hapus'];
    unset($_SESSION['dataBarang'], $daftar);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUKAMAJU | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="px-5 container text-center">
        <h1 class="text-center">Kasierr</h1>
        <form action="" class="" method="post">
            <div class="row ">
                <input type="text" placeholder="masukan nama barang" name="namaBarang" required class="form-control ">
                <input type="number" placeholder="masukan jumlah barang" name="jumlahBarang" required
                    class="form-control my-3">
                <input type="number" placeholder="masukan harga barang" name="hargaBarang" required
                    class="form-control">
            </div>
            <div class="mt-2 row">
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        <table class="table table-striped container mt-3 ">
            <thead>
                <tr style="border-bottom:2px solid black;">
                    <th class="col">No</th>
                    <th class="col">Nama Barang</th>
                    <th class="col">Jumlah Barang</th>
                    <th class="col">Harga Barang</th>
                    <th class="col">Total</th>
                    <th class="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['dataBarang']) && is_array($_SESSION['dataBarang']) && !empty($_SESSION['dataBarang'])) {
                    $no = 1;

                    foreach ($_SESSION['dataBarang'] as $key => $value) {
                        $total = $value['harga'] * $value['jumlah'];
                        $formattedTotal = "Rp " . number_format($total, 2, ',', '.');
                        $harga = number_format($value['harga'], 0, ',', '.');
                        echo "<tr class='text-center'>";
                        echo "<td>$no</td>";
                        echo "<td>" . ucfirst($value['nama']) . "</td>";
                        echo "<td>" . $value['jumlah'] . "</td>";
                        echo "<td>" . $harga . "</td>";
                        echo "<td>" . $formattedTotal . "</td>";
                        echo "<td>
                            <form method='post' class='d-inline-block'>
                                <input type='hidden' name='delete-index' value='$key'>
                                <button type='submit' class='btn btn-danger btn-sm' name='hapus'>Hapus</button>
                            </form>
                        </td>";
                        $no++;
                    }
                }
                ?>
            </tbody>
            <tr>
                <td class=" text-center fw-bold " colspan="4">Total Harga</td>
                <td class=" text-center fw-bold">
                    <?php
                    $totalHarga = 0;
                    foreach ($_SESSION['dataBarang'] as $key) {
                        $totalHarga += $key['total'];
                    }
                    echo "total Rp. " . number_format($totalHarga, 2, ',', '.');
                    ?>
                </td>
                <td class=""></td>
            </tr>
        </table>

        <div class="mt-2 text-center row ">
            <a href="beli.php" name="beli" class="btn btn-success">Beli</a>
        </div>
    </div>
</body>

</html>