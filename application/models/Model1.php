<?php
class Model1 extends CI_Model
{
    //method penjumlahan
    public function jumlah($n1, $n2)
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
