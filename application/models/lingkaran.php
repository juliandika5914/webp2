<?php
class Lingkaran extends CI_Model
{
//membuat variable untuk menampung nilai
public $phi, $r, $hasil;

//method penjumlahan
public function jumlah($n = null)
{
  $this->phi = 3.14;
  $this->r = $n;
  $this->hasil = $this->phi * $this->r * $this->r;
  return $this->hasil;
}
}
