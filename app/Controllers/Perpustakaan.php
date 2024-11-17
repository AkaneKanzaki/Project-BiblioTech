<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TbukuModel;
use App\Models\TpeminjamanModel;
use App\Models\TuserModel;
class Perpustakaan extends Controller
{
    protected $objekuser;
    protected $objekbuku;
    protected $objekpeminjaman;
    public function __construct()
    {
        $this->objekuser = new TuserModel();
        $this->objekpeminjaman = new TpeminjamanModel();
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
    public function datapeminjaman()
    {
        $objekpeminjaman = $this->objekpeminjaman->getobjekpeminjaman();
        $data = [
        'title' => 'Daftar Data Peminjaman',
        'objekpeminjaman' => $objekpeminjaman
        ];
        echo view('Layouts/header', $data);
        echo view('Perpustakaan/datapeminjaman', $data);
        echo view('Layouts/footer');
    }
    public function detaildatapeminjaman($kode_peminjaman, $kode_buku)
    {
        $objekbuku = $this->objekbuku->getobjekbuku($kode_buku);
        $objekpeminjaman = $this->objekpeminjaman->getobjekpeminjaman($kode_peminjaman);
        $data = [
        'title' => 'Detail Data Peminjaman ' . $kode_peminjaman,
        'objekpeminjaman' => $objekpeminjaman,
        'objekbuku' => $objekbuku
        ];
        echo view('Layouts/header', $data);
        echo view('Perpustakaan/detaildatapeminjaman', $data);
        echo view('Layouts/footer');
    }
    public function tambahdatapeminjaman()
    {
        $objekbuku = $this->objekbuku->findAll();
        $objekuser = $this->objekuser->findAll();
        $data = [
            'title' => 'Tambah Data Peminjaman',
            'objekbuku' => $objekbuku,
            'objekuser' => $objekuser,
        ];
        echo view('Layouts/header' , $data);
        echo view('Layouts/footer');
        echo view('Perpustakaan/tambahdatapeminjaman', $data);
    }
    public function simpandatapeminjaman()
    {
        $this->objekpeminjaman->save([
            'kode_peminjaman' => $this->request->getVar('kode_peminjaman'),
            'kode_buku' => $this->request->getVar('kode_buku'),
            'id' => $this->request->getVar('id'),
            'tgl_peminjaman' => $this->request->getVar('tgl_peminjaman')
        ]);
        session()->setFlashdata('simpan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/Perpustakaan/datapeminjaman');
    }
    public function hapusdatapeminjaman($kode_peminjaman)
    {
        $this->objekpeminjaman->delete($kode_peminjaman);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/Perpustakaan/datapeminjaman');
    }
    public function datauser()
    {
        $objekuser = $this->objekuser->findAll();
        $data = [
            'title' => 'Daftar Data User',
            'objekuser' => $objekuser
        ];
        echo view('Layouts/header', $data);
        echo view('Perpustakaan/datauser');
        echo view('Layouts/footer');
    }
    public function detaildatauser($id)
    {
        $objekuser = $this->objekuser->getobjekuser($id);
        $data['title'] = 'Detail Data User' . $id;
        $data2['objekuser'] = $objekuser;
        echo view('Layouts/header', $data);
        echo view('Perpustakaan/detaildatauser', $data2);
        echo view('Layouts/footer');
    }
    public function tambahdatauser()
    {
        $data = [
            'title' => 'Tambah Data User'
        ];
        echo view('Layouts/header' , $data);
        echo view('Layouts/footer');
        echo view('Perpustakaan/tambahdatauser');
    }
    public function simpandatauser()
    {
        $this->objekuser->save([
            'id' => $this->request->getVar('id'),
            'username' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('nama')
        ]);
        session()->setFlashdata('simpan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/Perpustakaan/datauser');
    }
    public function hapusdatauser($id)
    {
        $this->objekuser->delete($id);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/Perpustakaan/datauser');
    }
    public function editdatauser($id)
    {
        $objekuser = $this->objekuser->getobjekuser($id);
        $data = [
            'title' => 'Edit Data User' . $objekuser ['id'],
            'objekuser' => $objekuser
        ];
        echo view('Layouts/header' , $data);
        echo view('Layouts/footer');
        echo view('Perpustakaan/editdatauser');
    }
    public function updatedatauser($id)
    {
        $this->objekuser->save( [
            'id' => $this->request->getVar('id'),
            'username' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('nama')
        ]);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to('/Perpustakaan/datauser');
    }
    public function editdatapeminjaman($kode_peminjaman)
    {
        $objekpeminjaman = $this->objekpeminjaman->getobjekpeminjaman($kode_peminjaman);
        $objekbuku = $this->objekbuku->findAll();
        $objekuser = $this->objekuser->findAll();
        $data = [
        'title' => 'Edit Data Peminjaman ' . $objekpeminjaman['kode_peminjaman'],
        'objekpeminjaman' => $objekpeminjaman,
        'objekbuku' => $objekbuku,
        'objekuser' => $objekuser
        ];
        echo view('Layouts/header', $data);
        echo view('Perpustakaan/editdatapeminjaman', $data);
        echo view('Layouts/footer');
    }
    public function updatedatapeminjaman($kode_peminjaman)
    {
        $this->objekpeminjaman->save([
            'kode_peminjaman' => $this->request->getVar('kode_peminjaman'),
            'nama_buku' => $this->request->getVar('nama_buku'),
            'nama' => $this->request->getVar('nama'),
            'tgl_peminjaman' => $this->request->getVar('tgl_peminjaman'),
            'tgl_pengembalian' => $this->request->getVar('tgl_pengembalian'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to('/Perpustakaan/datapeminjaman');
    }
}