<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Rental Motor</title>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center bg-secondary bg-opacity-5"
    style="height: 100vh;">
        <div class="container rounded-2 p-5 shadow p-3 border border-white" style="max-width: 750px;">
            <form action="" method="post" class="container bg-body rounded-2 " style="max-width:600px; height: auto;">
                <div class="row">
                    <div class="col">
                        <label for="nama">Masukan Nama Anda : </label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="col">
                        <label for="lamaRental">Masukan Jangka Waktu (hari) : </label>
                        <input type="number" name="lamaRental" id="lamaRental" class="form-control" placeholder="Waktu (hari)" required>
                    </div>
                    <div class="row justify-content-center m-0">
                        <label for="jenis">Pilih Jenis Motor :</label>
                        <select name="jenis" class="form-select" required>
                            <option selected disabled>Motor Sewa</option>
                            <option value="Scooter">Scooter</option>
                            <option value="Sport">Sport</option>
                            <option value="SportTouring">Sport Touring</option>
                            <option value="Cross">Cross</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-secondary btn-lg mb-3 mt-3" style="width: 276px; margin-left: 12px;" required>
                </div>
            </form>
            <div class="container bg-body rounded-2 mt-3">
                <?php
                require 'logic.php';
                $proses = new Rental();
                $proses->setHarga(70000, 90000, 90000, 100000);
                if (isset($_POST['submit'])) {
                    $proses->member = $_POST['nama'];
                    $proses->jenis = $_POST['jenis'];
                    $proses->waktu = $_POST['lamaRental'];
                    $proses->pembayaran();
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>