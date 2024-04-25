<?php
if (isset($_POST['submit']) && $_POST['jenis'] && $_POST['liter']) {
    $jenis = $_POST['jenis'];
    $liter = $_POST['liter'];

    class shell
    {
        public
            $jenis,
            $liter,
            $harga,
            $ppn = 0.1;
        public function __construct($liter, $jenis)
        {
            $this->jenis = $jenis;
            $this->liter = $liter;
            switch ($this->jenis) {
                case "Super":
                    $this->harga = 15420;
                    break;
                case "V-Power":
                    $this->harga = 16130;
                    break;
                case "Diesel":
                    $this->harga = 18310;
                    break;
                case "Nitro":
                    $this->harga = 16510;
                    break;
            }
        }
    }
    class beli extends shell
    {
        public function beli()
        {
            $total = number_format(($this->liter * $this->harga) + $this->harga * $this->liter * $this->ppn, 2, ',', '.');
            $all = "<div class='card text-center mt-3'>
                    <div class='card-header'>
                        Jumlah Harga Yang Harus Anda Bayar
                    </div>
                    <div class='card-body'>
                        <h6 class='card-title'>Anda Membeli Bahan Bakar Tipe $this->jenis</h6>
                        <p class='card-text'>Anda Membeli Bahan Bakar Sebanyak $this->liter liter</p>
                        <h5 class='card-text'>Total Yang Harus Anda Bayar Adalah $total</h5>
                    </div>
                </div>";
            echo $all;
        }
    }
} //penutup if utama
