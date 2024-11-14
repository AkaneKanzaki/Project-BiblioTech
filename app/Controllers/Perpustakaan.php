<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TbukuModel;
class Perpustakaan extends Controller
{
    protected $objekbuku;
    public function __construct()
    {
        $this->objekbuku = new TbukuModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Data Buku'
        ];
        echo view('Layouts/header' , $data);
        echo view('Layouts/footer');
        echo view('Perpustakaan/index');
    }
    public function databuku()
    {
        $objekbuku = $this->objekbuku->findAll();
        $data = [
            'title' => 'Daftar Data Buku',
            'objekbuku' => $objekbuku
        ];
        echo view('Layouts/header' , $data);
        echo view('Layouts/footer');
        echo view('Perpustakaan/databuku');
    }
    public function detailbuku($kode_buku)
    {
        $objekbuku = $this->objekbuku->getobjekbuku($kode_buku);
        $data['title'] = 'Detail Data Buku' . $kode_buku;
        $data2['objekbuku'] = $objekbuku;
        echo view('Layouts/header', $data);
        echo view('Layouts/footer');
        echo view('Perpustakaan/detailbuku', $data2);
    }
}