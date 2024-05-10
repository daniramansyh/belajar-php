<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data Siswa</title>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center bg-secondary bg-opacity-50%"
        style="height: 100vh;">
        <div class="container rounded-2 p-5 shadow p-3 border border-white" style="max-width: 750px;">
            <form action="" method="post" class="container bg-body rounded-2 " style="max-width:600px; height: auto;">
                <div class="row">
                    <div>
                        <h3>
                            <center>Masukan Data Siswa</center>
                        </h3>
                    </div>
                    <div class="col">
                        <label for="name" class="form-label fw-semibold">Nama :</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukan Nama">
                    </div>
                    <div class="col">
                        <label for='nis' class='form-label fw-semibold'>NIS :</label>
                        <input type='number' name='nis' class='form-control' placeholder='Masukan NIS'>
                    </div>
                    <div class="col">
                        <label for='rayon' class='form-label fw-semibold'>Rayon :</label>
                        <input type='text' name='rayon' class='form-control' placeholder='Maukan Rayon'>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <button type="submit" name="kirim" class="btn-secondary mb-2 mt-2"
                            style="width: 76px;">Submit</button>
                        <button type="submit" name="cetak" class="btn-secondary mb-2 mt-2 ms-2"
                            style="width: 76px;">Cetak</button>
                        <button type="submit" name="delete" class="btn-secondary mb-2 mt-2 ms-2"
                            style="width: 76px;">Hapus</button>
                    </div>
                </div>
            </form>
            <div class="container bg-body rounded-2 mt-3">
                <?php
                session_start();

                if (!isset($_SESSION['dataSiswa'])) {
                    $_SESSION['dataSiswa'] = array();
                }

                if (isset($_POST['kirim'])) {
                    if ($_POST['name'] == "" && $_POST['nis'] = "" && $_POST['rayon'] == "") {
                        echo "data kosong";
                    } else {
                        $siswa = array(
                            "name" => $_POST['name'],
                            "nis" => $_POST['nis'],
                            "rayon" => $_POST['rayon']
                        );
                        array_push($_SESSION['dataSiswa'], $siswa);
                    }
                    foreach ($_SESSION['dataSiswa'] as $key => $value) {
                        echo "Nama : " . $value['name'] . "<br>";
                        echo "NIS : " . $value['nis'] . "<br>";
                        echo "Rayon : " . $value['rayon'] . "<br>";
                    }
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