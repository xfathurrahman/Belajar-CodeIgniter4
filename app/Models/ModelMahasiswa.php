<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Mahasiswa;

class ModelMahasiswa extends Model
{
    protected $table         = 'mahasiswa';
    protected $allowedFields = [
        'nim','nama','alamat','jenis_kelamin','tanggal_lahir','no_telp'
    ];
    protected $returnType    = Mahasiswa::class;
    protected $useTimestamps = true;
}
