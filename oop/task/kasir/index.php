<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Proses Kasir</title>
</head>

<body>
    <div class="container main d-flex flex-column justify-content-center align-items-center" style="width: 100vh;">
        <p class="text-center fw-bold fs-5 mt-3">Masukan data barang</p>
        <form action="logic.php" method="post">
            <div class="d-flex justify-content-around">
                <input type="text" class="nama form-control container mt-3" name="barang" placeholder="Masukan barang" required>
                <input type="number" class="nama form-control container mt-3 mx-3" name="hargaBarang"
                    placeholder="Masukan harga" required>
                <input type="number" class="nama form-control container mt-3" name="jumlahBarang"
                    placeholder="Masukan jumlah" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-3 container"
                style="width: 100px;">Tambah</button>
            <a href="destroy.php" name="delete" class="btn btn-danger mt-3" style="width: 150px;">Hapus Data</a>
            <a href='beli.php' name='delete' class='btn btn-primary mt-3 <?= empty($_SESSION['data']) ? 'd-none' : '' ?>' style='width: 100px;'>Beli</a>
        </form>
        <p class="container text-center fw-bold fs-10 mt-3">List barang :</p>
        <table class="table table-striped container  ">
            <thead>
                <tr style="border-bottom:2px solid black;">
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>        
            <tbody>
                <?php if (isset($_SESSION['data'])):
                    $no = 1; $totalHarga = 0;?>
                    <?php foreach ($_SESSION['data'] as $key => $data): 
                        $total= $data['hargaBarang'] * $data['jumlahBarang'];?>
                        <tr class='text-center'>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo ucfirst($data['barang']); ?></td>
                            <td><?php echo $data['jumlahBarang']; ?></td>
                            <td><?php echo $data['hargaBarang']; ?></td>
                            <td><?php echo $total; ?></td>
                            <td><a href="hapus.php?key=<?php echo $key; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                            <?php $totalHarga += $total;?>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
            <tr>
                <td class=" text-center fw-bold " colspan="4">Total Harga</td>
                <td class=" text-center fw-bold">
                    <?php echo "Total Rp. " . number_format(@$totalHarga, 2, ',', '.');?>
                </td>
                <td class=""></td>
            </tr>
        </table>
    </div>
</body>
</html>