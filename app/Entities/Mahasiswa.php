<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Mahasiswa extends Entity{
    public function setPassword(string $password): Mahasiswa
    {
        $salt = uniqid('',true);
        $this->attributes['salt'] = $salt;
        $this->attributes['password'] = md5($salt,$password);

        return $this;
    }
}
