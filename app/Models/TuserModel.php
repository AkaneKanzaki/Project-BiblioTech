<?php
namespace App\Models;
use CodeIgniter\Model;
class TuserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id', 'username', 'nama'];
    public function getobjekuser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}