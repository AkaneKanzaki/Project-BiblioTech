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
    public function tambahbuku()
    {
        session();
        $data = [
            'title' => 'Masukan Data Buku',
            'validation' => \Config\Services::validation()
        ];
        echo view('Layouts/header', $data);
        echo view('Perpustakaan/tambahbuku');
        echo view('Layouts/footer');
    }
    public function simpan()
    {
        if (!$this->validate([
            'kode_buku' => [
                'rules' => 'required|is_unique[TbukuModel.kode_buku]',
                'errors' => [
                    'required' => 'Kode Buku Harus Diinputkan',
                    'is_unique' => '{field} Buku Sudah Terdaftar'
                ]
            ],
            'nama_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Buku Buku Harus Diinputkan'
                ]
            ],
            'tahun_terbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Terbit Anak Harus Diinputkan'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Penulis Harus Diinputkan'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Perpustakaan/tambahbuku')->withInput()->with('validation', $validation);
        }  
        $this->objekbuku->save([
            'kode_buku' => $this->request->getVar('kode_buku'),
            'nama_buku' => $this->request->getVar('nama_buku'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
            'penulis' => $this->request->getVar('penulis')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Disimpan');
        return redirect()->to('/Perpustakaan/databuku');
    }
}