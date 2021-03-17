<?php

namespace App\Controllers;

use App\Models\ModelMahasiswa;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Pages/Home/index.php');
    }
}
