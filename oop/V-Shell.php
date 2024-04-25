<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pom V-Shell</title>
</head>
<body>
<?php
$jumlah = $_POST['jumlah'];
$jenisBensin = $_POST['jenis'];

if (isset($_POST['submit']) && $_POST['jumlah'] == false && $_POST ['jenis'] == false) {
  class Shell {
    public $jumlah;
    public $jenisBensin;
    public $hargaPerLiter;
    public $ppn;
    public $totalHarga;

    public function __construct($jumlah, $jenisBensin) {
      $this->jumlah = $jumlah;
      $this->jenisBensin = $jenisBensin;

      switch ($this->jenisBensin) {
        case 'Shell Super':
          $this->hargaPerLiter = 15420;
          break;
        case 'Shell V-Power':
          $this->hargaPerLiter = 16130;
          break;
        case 'Shell V-Power Nitro':
          $this->hargaPerLiter = 18310;
          break;
        case 'Shell V-Power Diesel':
          $this->hargaPerLiter = 16510;
          break;
      }
    }

    public function hitungHarga() {
      $this->ppn = $this->jumlah * $this->hargaPerLiter * (10/100);
      $this->totalHarga = $this->jumlah * $this->hargaPerLiter + $this->ppn;
    }

    public function dapatkanTotalHarga() {
      return number_format($this->totalHarga, 2, ",", ".");
    }
  }

  $shell = new Shell($jumlah, $jenisBensin);
  $shell->hitungHarga(); // Hitung harga dan PPN
  $totalHarga = $shell->dapatkanTotalHarga();

  echo "Total harga pembelian bensin Shell $jenisBensin sebanyak $jumlah liter adalah Rp. $totalHarga";
}
?>


    <form action="" method="POST">
        <label for="jumlah"></label>
        <input type="number" name="jumlah" id="jumlah" placeholder="Masukan Jumlah Angka (Liter)">

        <select name="jenis" id="jenis">
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
        </select>

        <button type="submit" name="submit">Beli</button>
        </form>
</body>
</html>