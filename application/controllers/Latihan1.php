<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<b><h2>Selamat Datang.. Selamat belajar Web Programming</h2><b>";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_Latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = ". $hasil;
    }
}