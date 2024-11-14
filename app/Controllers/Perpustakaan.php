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
    public function detaildatabuku($kode_buku)
    {
        $objekbuku = $this->objekbuku->getobjekbuku($kode_buku);
        $data['title'] = 'Detail Data Buku' . $kode_buku;
        $data2['objekbuku'] = $objekbuku;
        echo view('Layouts/header', $data);
        echo view('Layouts/footer');
        echo view('Perpustakaan/detaildatabuku', $data2);
    }
    public function tambahdatabuku()
    {
        $data = [
            'title' => 'Tambah Data Buku'
        ];
        echo view('Layouts/header' , $data);
        echo view('Layouts/footer');
        echo view('Perpustakaan/tambahdatabuku');
    }
    public function simpandatabuku()
    {
        $validationRules = [
            'nama_buku' => 'required|min_length[10]',
            'tahun_terbit' => 'required|numeric|exact_length[4]',
            'penulis' => 'required|min_length[10]',
            'harga' => 'required|numeric|greater_than[0]',
            'stok' => 'required|numeric|greater_than_equal_to[0]'
        ];
        if (!$this->validate($validationRules)) {
            return redirect()->to('/Perpustakaan/tambahbuku')->withInput()->with('validation', $this->validator);
        }
        $this->objekbuku->save([
            'kode_buku' => $this->request->getVar('kode_buku'),
            'nama_buku' => $this->request->getVar('nama_buku'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
            'penulis' => $this->request->getVar('penulis'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok')
        ]);
        session()->setFlashdata('simpan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/Perpustakaan/databuku');
    }
    public function hapusdatabuku($kode_buku)
    {
        $this->objekbuku->delete($kode_buku);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/Perpustakaan/databuku');
    }
    public function editdatabuku($kode_buku)
    {
        $objekbuku = $this->objekbuku->getobjekbuku($kode_buku);
        $data = [
            'title' => 'Edit Data Buku' . $objekbuku ['kode_buku'],
            'objekbuku' => $objekbuku
        ];
        echo view('Layouts/header' , $data);
        echo view('Layouts/footer');
        echo view('Perpustakaan/editdatabuku');
    }
    public function updatedatabuku($kode_buku)
    {
        $this->objekbuku->save( [
            'kode_buku' => $this->request->getVar('kode_buku'),
            'nama_buku' => $this->request->getVar('nama_buku'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
            'penulis' => $this->request->getVar('penulis'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok')
        ]);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to('/Perpustakaan/databuku');
    }
}