<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Mahasiswa extends ResourceController
{
    protected $modelName = 'App\Models\ModelMahasiswa';
    protected $format    = 'json';

	public function index()
	{
        return $this->respond($this->model->findAll());
	}
}
