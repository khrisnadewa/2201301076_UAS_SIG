<?php

namespace App\Models;

use CodeIgniter\Model;

class RumahSakitModel extends Model
{
    protected $table = 'rumahsakit';
    protected $primaryKey = 'id_rs';
    protected $allowedFields = ['nama','alamat','telepon','email','lat', 'long'];

    public function getRumahSakit($id_rs = false)
    {
        if ($id_rs === false) {
            return $this->findAll();
        }

        return $this->where(['id_rs' => $id_rs])->first();
    }
}
