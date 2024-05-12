<?php
if (isset($_POST['lihat']) && !empty($_POST['jenis']) && !empty($_POST['jumlah']) && !empty($_POST['money'])) {
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    $uang = $_POST['money'];
    class Bensin
    {
        public
            $jenis,
            $jumlah,
            $harga,
            $uang,
            $ppn = 0.1;
        public function __construct($jenis, $jumlah, $uang)
        {
            $this->uang = $uang;
            $this->jumlah = $jumlah;
            $this->jenis = $jenis;
            $this->harga = match ($jenis) {
                "Super" => 15420,
                "V-Power" => 16130,
                "Diesel" => 18310,
                "Nitro" => 16510,
                default => null,
            };
        }
    }
    class Buy extends Bensin
    {
        public
        $price,
        $pajak,
        $total,
        $sisa;
        public function harga()
        {
            $this->price = $this->harga * $this->jumlah;
            $this->pajak = $this->price * $this->ppn;
            $this->total = $this->price + $this->pajak;
            $this->sisa = $this->uang - ($this->price + $this->pajak);
            if ($this->uang < $this->total) {
                echo "<center>Uang anda kurang !";
            } else {
                echo "
                    <center>
                    -----------------------------------------------<br>
                    Jenis bensin: Shell $this->jenis <br>
                    Jumlah dalam liter: $this->jumlah <br>
                    Harga asli: Rp." . number_format($this->price, 2, ',', '.') . " <br>
                    PPN: Rp." . number_format($this->pajak, 2, ',', '.') . " <br>
                    Total yang harus di bayar: Rp." . number_format($this->total, 2, ',', '.') . " <br>
                    Uang anda: Rp." . number_format($this->uang, 2, ',', '.') . " <br>
                    Sisa uang anda: Rp." . number_format($this->sisa, 2, ',', '.') . " <br>
                    -----------------------------------------------<br>
                    <div class='row d-flex justify-content-center align-items-center'>
                    <button type='button' class='btn btn-secondary btn-lg mb-3 mt-3'
                    style='width: 276px; margin-left: 12px;' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@mdo'>Print</button>
                    </div> 
                    </center>
                    ";
            }

        }
    }
} else {
    echo "<div class='card text-center mt-3'>
        <div class='card-body'>
            <p>Inputkan bensin beserta jumlah yang akan di beli!</p>
        </div>
</div>";
}
?>