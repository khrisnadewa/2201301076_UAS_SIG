<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password'];
    protected $useTimestamps = true;

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
