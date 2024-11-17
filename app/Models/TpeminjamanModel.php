<?php
namespace App\Models;

use CodeIgniter\Model;

class TpeminjamanModel extends Model
{
    protected $table = 'tb_peminjaman';
    protected $primaryKey = 'kode_peminjaman';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['kode_peminjaman', 'kode_buku', 'id', 'tgl_peminjaman', 'tgl_pengembalian', 'status'];

    public function getobjekpeminjaman($kode_peminjaman = false)
    {
        if ($kode_peminjaman == false) {
            return $this->select('tb_peminjaman.*, tb_buku.nama_buku, tb_user.nama')
                        ->join('tb_buku', 'tb_buku.kode_buku = tb_peminjaman.kode_buku')
                        ->join('tb_user', 'tb_user.id = tb_peminjaman.id')
                        ->findAll();
        }
        return $this->select('tb_peminjaman.*, tb_buku.nama_buku, tb_user.nama')
                    ->join('tb_buku', 'tb_buku.kode_buku = tb_peminjaman.kode_buku')
                    ->join('tb_user', 'tb_user.id = tb_peminjaman.id')
                    ->where(['kode_peminjaman' => $kode_peminjaman])
                    ->first();
    }
}