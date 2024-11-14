<?php
namespace App\Models;
use CodeIgniter\Model;
class TbukuModel extends Model
{
    protected $table = 'tb_buku';
    protected $primaryKey = 'kode_buku';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['kode_buku', 'nama_buku', 'tahun_terbit', 'penulis', 'harga', 'stok'];
    public function getobjekbuku($kode_buku = false)
    {
        if ($kode_buku == false) {
            return $this->findAll();
        }
        return $this->where(['kode_buku' => $kode_buku])->first();
    }
}