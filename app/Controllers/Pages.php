<?php

namespace App\Controllers;

use App\Models\ServicesModel;

class Pages extends BaseController
{
    public function halamanAwal()
    {
        $data = [
            'title' => 'Selamat Datang'
        ];


        return view('pages/home', $data);
    }
}
