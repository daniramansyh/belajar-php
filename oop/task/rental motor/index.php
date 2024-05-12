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
                        <label for="nama" class="form-label fw-semibold">Masukan Nama Pengguna</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Pengguna"
                            required>
                    </div>
                    <div class="col">
                        <label for='waktu' class='form-label fw-semibold'>Masukan Waktu (Hari)</label>
                        <input type='number' name='waktu' id="waktu" class='form-control' placeholder='Waktu Pinjam'
                            required>
                    </div>
                    <div>
                        <label for="jenis" class="form-label fw-semibold">Pilih Jenis Motor</label>
                        <select name="jenis" id="jenis" class="form-select fw-semibold"
                            aria-label="Default select example" required>
                            <option selected disabled>Motor Sewa</option>
                            <option value="Yamaha">XSR-750</option>
                            <option value="Honda">Beat New</option>
                            <option value="Ducati">Panigale V4</option>
                            <option value="Harley Davidson">Fat Bob 114</option>
                        </select>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <button type="submit" name="submit" class="btn btn-secondary btn-lg mb-3 mt-3"
                            style="width: 276px; margin-left: 12px;">Sewa</button>
                    </div>
                </div>
            </form>
            <div class="container bg-body rounded-2 mt-3">
                <?php
                    if (isset($_POST['submit']) && !empty($_POST['nama']) && !empty($_POST['waktu']) && !empty($_POST['jenis'])) {
                        $nama = $_POST['nama'];
                        $waktu = $_POST['waktu'];
                        $jenis = $_POST['jenis'];

                        class Motor
                        {
                            public $nama, $jenis, $waktu, $diskon;
                            public $harga = 70000;
                            public $pajak = 10000;

                            public function __construct($nama, $waktu, $jenis)
                            {
                                $this->nama = $nama;
                                $this->jenis = $jenis;
                                $this->waktu = $waktu;
                                $this->diskon = match ($nama) {
                                    "Xeta", "Dani", "Sambera", "Dendra" => 0.05,
                                    default => 0,
                                };
                            }
                        }

                        class Sewa extends Motor
                        {
                            public $price, $total, $ppn, $hasil;

                            public function harga()
                            {
                                $this->price = $this->harga * $this->waktu;
                                $this->total = $this->price + $this->pajak;
                                if ($this->diskon > 0) {
                                    $this->ppn = $this->total * $this->diskon;
                                    $this->hasil= $this->total - $this->ppn;
                                    echo "<center>$this->nama berstatus sebagai Member mendapatkan diskon sebesar 5% <br> Jenis motor yang dirental adalah $this->jenis selama $this->waktu hari <br> Harga rental per-harinya : Rp. 70.000,00 <br><br> Besar yang harus dibayarkan adalah Rp.",number_format($this->hasil,2,',','.');
                                } else {
                                    echo  "<center>$this->nama berstatus tidak sebagai Member <br> Jenis motor yang dirental adalah $this->jenis selama $this->waktu hari <br> Harga rental per-harinya : Rp.70.000,00 <br><br> Besar yang harus dibayarkan adalah Rp. " , number_format($this->total,2,',','.');
                                }
                            }
                        }

                        $rental = new Sewa($nama, $waktu, $jenis);
                        $rental->harga();
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