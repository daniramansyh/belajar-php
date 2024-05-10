<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistem Rental Motor</title>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center bg-secondary bg-opacity-50%"
        style="height: 100vh;">
        <div class="container rounded-2 p-5 shadow p-3 border border-white" style="max-width: 750px;">
            <form action="" method="post" class="container bg-body rounded-2 " style="max-width:600px; height: auto;">
                <div class="row">
                    <div>
                        <h1>Selamat Datang di Rental Xet</h1>
                    </div>
                    <div class="col">
                        <label for="name" class="form-label fw-semibold">Masukan Nama Pengguna</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Pengguna">
                    </div>
                    <div class="col">
                        <label for='time' class='form-label fw-semibold'>Masukan Waktu (Hari)</label>
                        <input type='number' name='time' class='form-control' placeholder='Waktu Pinjam'>
                    </div>
                    <div>
                        <label for="bensin" class="form-label fw-semibold">Pilih Jenis Motor</label>
                        <select name="jenis" id="bensin" class="form-select fw-semibold" aria-label="Default select example">
                            <option selected disabled>Motor Sewa</option>
                            <option value="Yamaha">XSR-750</option>
                            <option value="Honda">Beat New</option>
                            <option value="Ducati">Panigale V4</option>
                            <option value="Harley Davidson">Fat Bob 114</option>
                        </select>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <button type="submit" name="sewa" class="btn btn-secondary btn-lg mb-3 mt-3"
                            style="width: 276px; margin-left: 12px;">Sewa</button>
                    </div>
                </div>
            </form>
            <div class="container bg-body rounded-2 mt-3">
                <?php
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
</body>

</html>