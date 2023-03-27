<?php
class Latihan1 extends CI_Controller
{
public function penjumlahan($n)
  {
    $this->load->model('Lingkaran');
    $hasil = $this->Lingkaran->jumlah($n);
    echo "<h1> Menghitung Luas Lingkaran dengan jari jari ".$n."
    menggunakan rumus (Phi*r*r)</h1><hr>";
    echo "Phi       : ". $this->Lingkaran->phi."<br/>";
    echo "Jari-jari : ". $n."<br/>";
    echo "Luas : ". $hasil."<br/> <br/>";

    echo "NAMA : JULIAN DIKA YUDA PRATAMA <br/>";
    echo "NIM : 17200066 <br/>";
    echo "KELAS : 17.6J.01 <br/>";
  }
}
?>
