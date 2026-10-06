<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'nama' => 'Jasmine Azzahra Alamsyah',
            'jurusan' => 'Ilmu Komputer',
            'semester' => 3
        ];

        return view('home', compact('data'));
    }
}