<?php

// Ibnu Wulida Fisyawal
// RPL XI-2
// 12007825
class kalkulator
{
  private $x;
  private $y;

  public function Tambah($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x + $this->y;
    return $hasil;
  }

  public function Kali($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x * $this->y;
    return $hasil;
  }

  public function Kurang($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x - $this->y;
    return $hasil;
  }

  public function Bagi($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x / $this->y;
    return $hasil;
  }

  public function form()
  {

    echo '<form method="POST">';
    echo "<h2>Kalkulator Sederhana</h2>";
    echo '<input type="text" name="x" placeholder="Masukkan Angka"> &nbsp;';
    echo '<select name="operasi">
            <option value="tambah">+</option>
            <option value="kali">x</option>
            <option value="kurang">-</option>
            <option value="bagi">/</option>
        </select> &nbsp;';
    echo '<input type="text" name="y" placeholder="Masukkan Angka"> &nbsp;';
    echo '<label>=</label> &nbsp;';
    echo '<input type="submit" value="Hasil">';
    echo '</form>';
  }
}

$data = new kalkulator();
$data->form();

if ($_POST) {
  $xa = $_POST['x'];
  $ya = $_POST['y'];
  if ($_POST['operasi'] == "tambah") {
    echo "Hasil Dari ".$xa." + ".$ya." = ".$data->Tambah($xa, $ya)."";
  } elseif ($_POST['operasi'] == "kali") {
    echo "Hasil Dari ".$xa." x ".$ya." = ".$data->Kali($xa, $ya)."";
  } elseif ($_POST['operasi'] == "kurang") {
    echo "Hasil Dari ".$xa." - ".$ya." = ".$data->Kurang($xa, $ya)."";
  } elseif ($_POST['operasi'] == "bagi") {
    echo "Hasil Dari ".$xa." / ".$ya." = ".$data->Bagi($xa, $ya)."";
  }
}
?>